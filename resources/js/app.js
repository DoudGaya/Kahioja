import { createApp } from 'vue'
window.axios = require('axios')

let navComponent = createApp({})
navComponent.component('nav-component', require('./components/NavComponent.vue').default)
navComponent.mount('#navComponent')

let productDetails = createApp({})
productDetails.component('product-details-component', require('./components/productDetailsComponent.vue').default)
productDetails.mount('#productDetails')

let productDescription = createApp({})
productDescription.component('product-description-component', require('./components/productDescriptionComponent.vue').default)
productDescription.mount('#productDescription')