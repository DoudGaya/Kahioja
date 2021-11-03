import { createApp } from 'vue';

let navComponent = createApp({})
navComponent.component('nav-component', require('./components/NavComponent.vue').default);
navComponent.component('cart-component', require('./components/CartComponent.vue'));
navComponent.mount('#navComponent')

let productDescription = createApp({})
productDescription.component('product-description-component', require('./components/productDescriptionComponent.vue').default);
productDescription.mount('#productDescription')