import { createApp } from 'vue'
import { store } from './store/index'
import Flutterwave from  'flutterwave-vue-v3'

window.axios = require('axios')
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;

let app = createApp({})
app.component('nav-component', require('./components/NavComponent.vue').default)
app.component('product-component', require('./components/productComponent.vue').default)
app.component('product-details-component', require('./components/productDetailsComponent.vue').default)
app.component('product-description-component', require('./components/productDescriptionComponent.vue').default)
app.component('category-component', require('./components/categoryComponent.vue').default)
app.component('load-component', require('./components/loadMoreComponent.vue').default)
app.component('checkout-component', require('./components/CheckOutComponent.vue').default)
app.use(store).use(Flutterwave, { publicKey: 'FLWPUBK-73e9051112aa802dbf62f33100f25bfd-X' } )
.mount('#app')

// let product = createApp({})
// product.mount('#product')

// let productDetails = createApp({})
// productDetails.mount('#productDetails')

// let productDescription = createApp({})
// productDescription.mount('#productDescription')