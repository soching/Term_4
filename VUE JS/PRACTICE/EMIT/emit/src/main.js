import { createApp } from 'vue'
// import App from './pp.vue'
import UserPage from './views/UserPage.vue';
import router from './router';
import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js' 

createApp(UserPage).use(bootstrap).use(router).mount('#app')