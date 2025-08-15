# Chat Realtime Project

## 🌟 Giới thiệu
Dự án này là ứng dụng **chat realtime** sử dụng kiến trúc **monorepo**, bao gồm:
- **Frontend:** Vue.js SPA
- **Backend API:** Laravel + PostgreSQL
- **Realtime Server:** Node.js + Socket.IO

Dự án tách frontend, backend và realtime server, đồng thời triển khai CI/CD cho từng thành phần.

---

## 🧩 Cấu trúc dự án
chat-app-realtime/
|-- chat-app-frontend/  <- Vue.js SPA
|-- chat-app-backend/   <- Laravel API + PostgreSQL
`-- realtime/           <- Node.js + Socket.IO

---

## ⚙️ Công nghệ sử dụng
| Thành phần       | Công nghệ & Tools                  |
|-----------------|-----------------------------------|
| Frontend        | Vue.js, Socket.IO-client, Axios    |
| Backend API     | Laravel, PostgreSQL, Passport/ Sanctum |
| Realtime Server | Node.js, Express.js, Socket.IO     |
| Deployment      | Vercel (frontend), Render/Railway (backend + realtime) |
| CI/CD           | Vercel (frontend), GitHub Actions (backend/realtime) |

---

## 🚀 Hướng dẫn cài đặt & chạy local

### 1. Frontend
```bash
cd frontend
npm install
npm run dev
```

### 2. Backend API
```bash
cd backend-api
composer install
php artisan migrate
php artisan serve
```

### 3. Realtime Server
```bash
cd realtime
npm install
node index.js
```

