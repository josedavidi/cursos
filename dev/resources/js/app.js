
require('./bootstrap');

window.Vue = require('vue');

window.moment = require('moment')
moment.locale('es');
window.toastr = require('toastr');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('new-service', require('./components/NewService.vue').default);
Vue.component('show-service', require('./components/ShowService.vue').default);


Vue.filter('myDate',function(updated){
    return moment(updated).format('LL');
});

const app = new Vue({
    el: '#app',
});
