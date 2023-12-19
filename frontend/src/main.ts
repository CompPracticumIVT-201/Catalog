

import  { createApp } from 'vue'
import { createPinia } from 'pinia'
import 'material-design-icons-iconfont'
import router from './router'
import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:8000/api/';

import App from './App.vue'

import "bootstrap/dist/css/bootstrap.min.css"

const app = createApp(App)

app.use(createPinia())
app.use(router);

app.mount('#app')
