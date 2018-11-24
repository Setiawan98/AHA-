require('./bootstrap');
import router from './routes'

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;

const AppLayout = Vue.component('app-layout',require('./components/appLayout.vue'));

new Vue(
    Vue.util.extend(
        {router},
        AppLayout
    )
).$mount('#mainLayout');