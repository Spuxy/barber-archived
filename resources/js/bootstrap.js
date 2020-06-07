import '@mdi/font/css/materialdesignicons.css'
import vue from 'vue'
import lodash from 'lodash'
import axios from 'axios'
import jump from "jump.js";
import anime from "animejs";

window._ = lodash;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue = vue;
window.jump = jump;
window.anime = anime;