require('./config');
require('./bootstrap');

window.Vue = require('vue');

Vue.component('student-form-component', require('./components/student/_FormComponent.vue').default);
Vue.component('student-edit-component', require('./components/student/EditComponent.vue').default);
Vue.component('student-add-component', require('./components/student/AddComponent.vue').default);
Vue.component('student-list-component', require('./components/student/ListComponent.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
});
