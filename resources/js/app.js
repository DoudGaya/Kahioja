import { createApp } from 'vue';

let app = createApp({})

app.component('nav-component', require('./components/NavComponent.vue').default);
app.component('cart-component', require('./components/CartComponent.vue').default);

app.mount(".app")