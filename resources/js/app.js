import { createApp } from 'vue';

let app = createApp({})

app.component('cart', require('./components/CartComponent.vue').default);
app.component('product', require('./components/ProductComponent.vue').default);

app.mount(".app")