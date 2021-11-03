import { createApp } from 'vue'
import ProductZoomer from 'vue-product-zoomer'

let navComponent = createApp({})
navComponent.component('nav-component', require('./components/NavComponent.vue').default)
navComponent.component('cart-component', require('./components/CartComponent.vue'))
navComponent.mount('#navComponent')

let productDetails = createApp({})
productDetails.use(ProductZoomer)
productDetails.component('product-details-component', require('./components/productDetailsComponent.vue').default)
productDetails.mount('#productDetails')

let productDescription = createApp({})
productDescription.use(ProductZoomer)
productDescription.component('product-description-component', require('./components/productDescriptionComponent.vue').default)
productDescription.mount('#productDescription')