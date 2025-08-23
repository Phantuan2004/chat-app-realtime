import axios from 'axios';

const API_URL = import.meta.env.VITE_API_URL;
const CLIENT_ID = import.meta.env.VITE_CLIENT_ID;
const CLIENT_SECRET = import.meta.env.VITE_CLIENT_SECRET;

// Tạo instance axios
const api = axios.create({
  baseURL: API_URL,
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded',
  },
});

// Interceptor để thêm token vào header
api.interceptors.request.use(
  (config) => {
    const token = localStorage.getItem('access_token');
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  (error) => Promise.reject(error)
);

// Interceptor để xử lý lỗi 401 và refresh token
let isRefreshing = false;
let failedQueue = [];

const processQueue = (error, token = null) => {
  failedQueue.forEach((prom) => {
    if (token) {
      prom.resolve(token);
    } else {
      prom.reject(error);
    }
  });
  failedQueue = [];
};

api.interceptors.response.use(
  (response) => response,
  async (error) => {
    const originalRequest = error.config;
    if (error.response && error.response.status === 401 && !originalRequest._retry) {
      if (isRefreshing) {
        return new Promise((resolve, reject) => {
          failedQueue.push({ resolve, reject });
        })
          .then((token) => {
            originalRequest.headers.Authorization = `Bearer ${token}`;
            return api(originalRequest);
          })
          .catch((err) => Promise.reject(err));
      }

      originalRequest._retry = true;
      isRefreshing = true;

      const refreshToken = localStorage.getItem('refresh_token');
      if (!refreshToken) {
        window.location.href = '/login';
        return Promise.reject(error);
      }

      try {
        const response = await axios.post(
          `${API_URL}/oauth/token`,
          new URLSearchParams({
            grant_type: 'refresh_token',
            refresh_token: refreshToken,
            client_id: CLIENT_ID,
            client_secret: CLIENT_SECRET,
          }),
          {
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          }
        );
        const { access_token, refresh_token } = response.data;
        localStorage.setItem('access_token', access_token);
        localStorage.setItem('refresh_token', refresh_token);

        api.defaults.headers.Authorization = `Bearer ${access_token}`;
        originalRequest.headers.Authorization = `Bearer ${access_token}`;

        processQueue(null, access_token);
        return api(originalRequest);
      } catch (refreshError) {
        localStorage.removeItem('access_token');
        localStorage.removeItem('refresh_token');
        window.location.href = '/login';
        return Promise.reject(refreshError);
      } finally {
        isRefreshing = false;
      }
    }
    return Promise.reject(error);
  }
);

// Login
export const login = async (email, password) => {
  const response = await api.post(`${API_URL}/api/login`, { email, password });
  if (response.data.data.access_token && response.data.data.refresh_token) {
    localStorage.setItem('access_token', response.data.data.access_token);
    localStorage.setItem('refresh_token', response.data.data.refresh_token);
  }
  return response.data;
};

// Register
export const register = async (name, email, password, password_confirm) => {
  const response = await api.post(`${API_URL}/api/register`, {
    name,
    email,
    password,
    password_confirm,
  });
  if (response.data.data.access_token && response.data.data.refresh_token) {
    localStorage.setItem('access_token', response.data.data.access_token);
    localStorage.setItem('refresh_token', response.data.data.refresh_token);
  }
  return response.data;
};

// Logout
export const logout = async () => {
  const response = await api.post('/api/logout', {}, {
    headers: { Authorization: `Bearer ${localStorage.getItem('access_token')}` },
  });
  localStorage.removeItem('access_token');
  localStorage.removeItem('refresh_token');
  return response.data;
};

// Get Current User
export const getCurrentUser = async () => {
  const response = await api.get('/api/me');
  return response.data;
};