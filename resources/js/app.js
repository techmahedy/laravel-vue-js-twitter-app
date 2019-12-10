require('./bootstrap');

window.Vue = require('vue');

//Events
let Event = new Vue()
window.Event = Event;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Twitter Component
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('timeline-component', require('./components/TimelineComponent.vue').default);

const app = new Vue({
    el: '#app',
});
