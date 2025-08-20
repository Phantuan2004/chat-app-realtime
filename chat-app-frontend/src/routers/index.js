// router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import LayoutDetail from '../layouts/LayoutDetail.vue';
import Index from '../views/Index.vue';
import Login from '../views/Login.vue';
import Register from '../views/Register.vue';
import { getCurrentUser } from '../services/auth/authService';

const routes = [
  {
    path: '/',
    redirect: () => localStorage.getItem('access_token') ? '/home' : '/login'
  },
  {
    path: '/',
    component: LayoutDetail,
    children: [
      { path: 'home', component: Index, meta: { requiresAuth: true } },
      { path: 'profile', component: () => import('../views/Profile.vue'), meta: { requiresAuth: true } },
      { path: 'chat-bot', component: () => import('../views/ChatBot.vue'), meta: { requiresAuth: true } },
      { path: 'faq', component: () => import('../views/Faq.vue'), meta: { requiresAuth: true } },
      { path: 'pricing', component: () => import('../views/Pricing.vue'), meta: { requiresAuth: true } },
      { path: 'stories', component: () => import('../views/Stories.vue'), meta: { requiresAuth: true } },
    ]
  },
  { path: '/login', component: Login },
  { path: '/register', component: Register },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  linkExactActiveClass: 'active',
});

// Helper verify token + get user
async function verifyToken() {
  const token = localStorage.getItem('access_token');
  if (!token) return false;
  try {
    await getCurrentUser(); // get user from API
    return true;
  } catch (err) {
    if (err.response?.status === 401) {
      localStorage.removeItem('access_token');
      localStorage.removeItem('refresh_token');
    }
    return false;
  }
}

// Router guard
router.beforeEach(async (to, from, next) => {
  const isAuth = await verifyToken();

  if (to.meta.requiresAuth && !isAuth) return next('/login');
  if ((to.path === '/login' || to.path === '/register') && isAuth) return next('/home');

  next();
});

export default router;
