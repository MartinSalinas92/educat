/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');




import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';



window.Vue = require('vue').default;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(VueSweetalert2);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('eliminar', require('./components/EliminarComponent.vue').default);
Vue.component('eliminaralumno', require('./components/EliminarAlumno.vue').default);
Vue.component('eliminartaller', require('./components/EliminarTaller.vue').default);
Vue.component('eliminarespecialidad', require('./components/EliminarEspecialidad.vue').default);
Vue.component('eliminarmateria', require('./components/EliminarMateria.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

});


require('./dropzone');

require('./notas')
