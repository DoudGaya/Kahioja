import Vuex from 'vuex';
    
export const store = new Vuex.Store({
    strict:true,
    state:{
        cart: [],
    },
    getters:{
        getCart(state){
            return state.cart
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
            axios.get(`/cart`)
                .then((response)=>{
                    // console.log(response.data)
                    context.commit("cart",response.data)
                }).catch(()=>{
                console.log("Error........")
            })
        },
    },
    mutations: {
        cart(state, payload) {
            return state.cart = payload
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