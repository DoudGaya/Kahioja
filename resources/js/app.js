import { createApp } from 'vue';

let app = createApp({})

app.component('cart', require('./components/CartComponent.vue').default);
app.component('user-info', require('./components/ExampleComponent.vue').default);

app.mount(".app")