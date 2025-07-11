import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
// main.js ya main.ts ke andar
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap' // agar aap Bootstrap JS bhi chahte ho (like modals, dropdowns)

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
