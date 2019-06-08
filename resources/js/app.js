/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import Vue from 'vue';
import App from './components/App';
import Vuetify from "vuetify";
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader
import lodashGet from 'lodash/get'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Vuetify);
Vue.prototype.$get = lodashGet;

const app = new Vue({
    el: '#app',
    baseURL: '',
    render: h => h(App),
});

export default app;
