import { createApp } from 'vue'
import App from './App.vue'
import router from './routers/index'
import ToastService from 'primevue/toastservice'

createApp(App).use(router).use(ToastService).mount('#app')
