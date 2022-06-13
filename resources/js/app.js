import { createApp } from 'vue'
import { store } from './store/index'

window.axios = require('axios')
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

let app = createApp({})
app.component('nav-component', require('./components/NavComponent.vue').default)
app.component('footer-component', require('./components/FooterComponent.vue').default)
app.component('product-component', require('./components/productComponent.vue').default)
app.component('product-details-component', require('./components/productDetailsComponent.vue').default)
app.component('product-description-component', require('./components/productDescriptionComponent.vue').default)
app.component('category-component', require('./components/categoryComponent.vue').default)
app.component('load-component', require('./components/loadMoreComponent.vue').default)
app.component('checkout-component', require('./components/CheckOutComponent.vue').default)
app.component('transaction-successful-component', require('./components/TransactionSuccessfulComponent.vue').default)
app.component('buynow-component', require('./components/BuyNowComponent.vue').default)
app.use(store).mount('#app')
