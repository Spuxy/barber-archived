import '../bootstrap'
import vue from 'vue'
import reservationForm from "../components/reservation/reservationForm";
import vuetify from "../../plugins/vuetify";
import Vuetify from "vuetify";
import VueWaypoint from 'vue-waypoint'

// Waypoint plugin
Vue.use(VueWaypoint)
window.Vue = vue
Vue.use(Vuetify)

export default new Vuetify({
    icons: {
        iconfont: 'md',
    },
})
new Vue({
    el: '#reservation',
    vuetify,
    components: {
        'reservationForm': reservationForm
    }
});
