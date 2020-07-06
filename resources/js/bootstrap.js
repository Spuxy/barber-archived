import '@mdi/font/css/materialdesignicons.css'
import vue from 'vue'
import lodash from 'lodash'
import axios from 'axios'
import jump from "jump.js";
import anime from "animejs";
import '@babel/parser';

window._ = lodash;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue = vue;
window.jump = jump;
window.anime = anime;

import Echo from "laravel-echo";

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'b584802e873b4ccd8cfc',
    cluster: 'eu',
    forceTLS: true
});
Echo.channel('orders')
    .listen('OrderShipped', (e) => {
        console.log(e.order.name);
    });
