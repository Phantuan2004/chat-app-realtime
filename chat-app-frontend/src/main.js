import { createApp } from 'vue'
import PrimeVue from 'primevue/config'
import ToastService from 'primevue/toastservice'
import Aura from '@primeuix/themes/aura'
import App from './App.vue'
import router from './routers/index'

const app = createApp(App)
app.use(PrimeVue, {
    theme: {
        preset: Aura,
    }
})
app.use(ToastService)
app.use(router)
app.mount('#app')
