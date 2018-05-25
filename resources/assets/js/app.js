
require('./bootstrap');

window.Vue = require('vue');

Vue.component('data-table', require('./components/lte/DataTable.vue'));
Vue.component('color-box', require('./components/lte/ColorBox.vue'));
Vue.component('dropdown', require('./components/lte/DropdownButton.vue'));
Vue.component('ddi', require('./components/lte/DropdownItem.vue'));
Vue.component('modal', require('./components/lte/Modal.vue'));
Vue.component('modal-button', require('./components/lte/ModalButton.vue'));
Vue.component('products', require('./components/ProductTable.vue'));
Vue.component('row', require('./components/ProductRow.vue'));

const app = new Vue({
    el: '#app'
});
