import { createApp } from 'vue'
import List from './views/employee/List.vue'
import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js' 

createApp(List).use(bootstrap).mount('#app')