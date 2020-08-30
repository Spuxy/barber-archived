import './bootstrap'
import jump from 'jump.js'
import anime from 'animejs/lib/anime.es.js';
import vuetify from "../plugins/vuetify";
import Vuetify from 'vuetify';
import VueWaypoint from "vue-waypoint";
import FlashMessage from '@smartweb/vue-flash-message';

Vue.use(Vuetify);
Vue.use(VueWaypoint)
Vue.use(FlashMessage);
Vue.use(jump);
const app = new Vue({
    el: '#app',
    vuetify,
    data: () => ({
        fab: false,
        intersectionOptions: {
            root: null,
            rootMargin: '0px 0px 0px 0px',
            threshold: [0, 1] // [0.25, 0.75]
          }
    }),
    computed:{
      success(){
          if (window.location.hash == '#success_hair'){
              this.flashMessage.success({
                  title: 'Success Message Title',
                  message: 'Hoorah, it is my fist npm package and it works!'
              });
          }
      }
    },
    methods: {
        onWaypoint ({ going, direction }) {
            if (going === this.$waypointMap.GOING_IN) {
                console.log('jdu dovnitr')
                this.fab = true
            }
                console.log('jdu ven')
                this.fab = false

            if(direction === this.$waypointMap.DIRECTION_TOP){
                console.log('jdudolu')
                this.fab = true
            }
        },

        onScroll (e) {
            if (typeof window === 'undefined') return
            const top = window.pageYOffset ||   e.target.scrollTop || 0
            this.fab = top > 20
        },

        toTop () {
            this.$vuetify.goTo(0)
        },

        scrollUp(){
            console.log('mrd')
            const target = document.getElementById('top')
            jump(target)
            console.log(target)
        },

        showMenu(){
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            if ($navbarBurgers.length > 0) {
                $navbarBurgers.forEach(function ($el) {
                        var target = $el.dataset.target;
                        var $target = document.getElementById(target);
                        $el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                });
            }
        },
        jumpFromMenu(target) {
            console.log(target)
            jump(target)
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
