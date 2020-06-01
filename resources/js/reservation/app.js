import '../bootstrap'
import vue from 'vue'
import reservationForm from "../components/reservation/reservationForm";
import vuetify from "../../plugins/vuetify";
// import Vuetify from "vuetify";

window.Vue = vue

new Vue({
    el: '#reservation',
    vuetify,
    components: {
        'reservationForm': reservationForm
    }
});
