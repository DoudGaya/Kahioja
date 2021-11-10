import { createApp } from 'vue'
window.axios = require('axios')

let app = createApp({})
app.component('nav-component', require('./components/NavComponent.vue').default)
app.component('product-component', require('./components/productComponent.vue').default)
app.component('product-details-component', require('./components/productDetailsComponent.vue').default)
app.component('product-description-component', require('./components/productDescriptionComponent.vue').default)
app.mount('#app')

// let product = createApp({})
// product.mount('#product')

// let productDetails = createApp({})
// productDetails.mount('#productDetails')

// let productDescription = createApp({})
// productDescription.mount('#productDescription')