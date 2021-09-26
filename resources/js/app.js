/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {loadVueComponentsFromDirectory} from "./backend/shared/utils";

require('./bootstrap');
import Vue from 'vue';
import VueRepeater from 'vue-repeater'
import 'vue-repeater/dist/lib/vue-repeater.css'
import VeeValidate from "vee-validate";
import Vuex from 'vuex'
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import VueLang from '@eli5/vue-lang-js'
import translations from './vue-translations.js';


require('lang.js');

Vue.component("v-select", vSelect);
Vue.component("vue-repeater", VueRepeater);
Vue.use(VueLang, {
    messages: translations, // Provide locale file
    locale: 'ar', // Set locale
    fallback: 'en' // Set fallback lacale
});

Vue.use(VueToast);
Vue.use(VeeValidate);
Vue.use(Vuex)
Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// vue form handler
import { Form } from 'vform';

window.Form = Form;

 // load all layouts files
const layout_files = require.context("./backend/layouts", true, /\.vue$/i);
loadVueComponentsFromDirectory(Vue, layout_files);
// load all views files
const views_files = require.context("./backend/views", true, /\.vue$/i);

loadVueComponentsFromDirectory(Vue, views_files);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
