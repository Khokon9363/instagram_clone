import Vue from 'vue';
import VueRouter from 'vue-router';
import RegistrationComponent from "./components/RegistrationComponent";
import LoginComponent from "./components/LoginComponent";
import ForgetComponent from "./components/ForgetComponent";
import HomeComponent from "./components/HomeComponent";
import ChatComponent from "./components/ChatComponent";

Vue.use(VueRouter);


const router  = new VueRouter({
    mode : 'history',
    routes : [
        {
            path      : '/login',
            component : LoginComponent
        },
        {
            path      : '/registration',
            component : RegistrationComponent
        },
        {
            path      : '/forget',
            component : ForgetComponent
        },
        {
            path      : '/',
            component : HomeComponent
        },
        {
            path      : '/chat',
            component : ChatComponent
        },
    ]
})

export default router