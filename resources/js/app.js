let Turbolinks = require("turbolinks")
Turbolinks.start()

require('./bootstrap');

window.Vue = require('vue');

files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
