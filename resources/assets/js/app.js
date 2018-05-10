
require('./bootstrap');

window.Vue = require('vue');

Vue.component('data-table', require('./components/lte/DataTable.vue'));
Vue.component('color-box', require('./components/lte/ColorBox.vue'));
Vue.component('dropdown', require('./components/lte/DropdownButton.vue'));
Vue.component('ddi', require('./components/lte/DropdownItem.vue'));
Vue.component('modal', require('./components/lte/Modal.vue'));
Vue.component('modal-button', require('./components/lte/ModalButton.vue'));
Vue.component('tabs', require('./components/lte/Tabs.vue'));
Vue.component('tab', require('./components/lte/Tab.vue'));

const app = new Vue({
    el: '#app'
});
