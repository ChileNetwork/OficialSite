require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';//URL standard

import Buefy from 'buefy';
Vue.use(Buefy);


//Vue.component('example', require('./components/Example.vue'));
// Define a new component called todo-item


Vue.component('slug-widget', require('./components/slugWidget.vue'));

//Vue.component('test', require('./components/ejemplo.vue'));





//var app = new Vue({
//   el: '#app',
//   data: {}
// });

/*$(document).ready(function (e){
	//Dropdown
	$('.dropdown').hover(function(e){
		$(this).toggleClass('is-open');
	});
});
*/


require('./manage')
