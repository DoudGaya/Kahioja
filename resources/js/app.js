import { createApp } from 'vue';

let app = createApp({})

app.component('nav-component', require('./components/NavComponent.vue').default);
app.component('cart-component', require('./components/CartComponent.vue').default);
app.component('product', require('./components/ProductComponent.vue').default);

app.mount(".app")