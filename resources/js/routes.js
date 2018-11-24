import Vue from 'vue'
import VueRouter from 'vue-router'
//import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueRouter)

const HomeLayout = Vue.component('HomeLayout',require('./components/layout/home.vue'));
const Profile = Vue.component('Profile',require('./components/layout/profile.vue'));
const Admin = Vue.component('Admin',require('./components/layout/admin.vue'));
const routes = [
    {
        name: 'HomeLayout',
        path: '/',
        component: HomeLayout
    },
    {
        name: 'Profile',
        path: '/profile',
        component: Profile
    },
    {
        name: 'Admin',
        path: '/admin',
        component: Admin
    }
]

const router = new VueRouter({mode: 'history', routes: routes});
export default router