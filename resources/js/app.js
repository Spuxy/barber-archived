import './bootstrap'
import vue from 'vue'
import jump from 'jump.js'
import anime from 'animejs/lib/anime.es.js';
import vuetify from "../plugins/vuetify";
import Vuetify from "vuetify";

window.Vue = vue
window.jump = jump
window.anime = anime

const app = new Vue({
    el: '#app',
    vuetify,
    methods: {
        pricingScroll(){
           const target = document.getElementById('pricing')
            jump(target)
            console.log('funguje')
        },
        aboutScroll(){
           const target = document.getElementById('aboutus')
            jump(target)
            console.log('funguje')
        },
        hoursScroll(){
            const target = document.getElementById('openHours')
            jump(target)
            console.log('funguje')
        },
    },
    created(){
        const svgPath = document.querySelectorAll('.path');
        console.log(svgPath)
        const svgText = anime({
            targets: svgPath,
            loop: true,
            direction: 'alternate',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 700,
            delay: (el, i) => { return i * 500 }
        });
    }
});
