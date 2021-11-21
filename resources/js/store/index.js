import Vuex from 'vuex';
    
export const store = new Vuex.Store({
    strict:true,
    state:{
        cart: [],
        user: []
    },
    getters:{
        getCart(state){
            return state.cart
        },
        getUser(state){
            return state.user
        },
        addCart(state){
            return state.cart.length
        },
        subTotal(state){
            return state.cart.reduce((sum, {subTotal}) => parseInt(sum + subTotal), 0)
        },
        deliveryFee(state){
            return state.cart.reduce((sum, {ship_fee}) => parseInt(sum + ship_fee), 0)
        }
    },
    actions:{
        allCartFromDatabase(context){
            axios.get(`/cart`).then(response => {
                context.commit("cart",response.data)
            }).catch(error => {
                console.log(error)
            })
        },
        loginUserFromDatabase(context){
            axios.get(`/user`).then(response => {
                context.commit('user', response.data)
            }).catch(error => {
                console.log(error)
            })
        }
    },
    mutations: {
        cart(state, payload) {
            return state.cart = payload
        },
        user(state, payload){
            return state.user = payload
        },
        addCart(state, payload){
            return state.cart.length = payload
        },
        subTotal(state, payload){
            return state.cart = payload
        },
        deliveryFee(state, payload){
            return state.cart = payload
        }
    }
});