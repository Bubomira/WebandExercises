import './assets/main.scss'
import 'bootstrap'
import router from './router';

import { createApp } from 'vue'

import App from './App.vue'
import tooltip from './tooltip';


createApp(App)
   .directive('tooltip',tooltip)
   .use(router)
   .mount('#app');
