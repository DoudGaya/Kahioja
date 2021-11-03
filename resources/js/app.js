import { createApp } from 'vue';

let productDescription = createApp({})
let app = createApp({})


app.component('nav-component', require('./components/NavComponent.vue').default);
app.component('cart-component', require('./components/CartComponent.vue').default);
productDescription.component('product-description-component', require('./components/productDescriptionComponent.vue').default);

productDescription.mount('#productDescription')
app.mount('.app')