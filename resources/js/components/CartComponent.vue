<template>
    <div v-show="displayCart" id="cart" class="shadow">
        <div id="cart-content">
            <div id="cart-header" class="p-4 flex justify-between">
                <span>
                    You have (3) items in you cart
                </span>
                <span @click="closeCart()" class="cursor-pointer">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                </span> 
            </div>
            <div id="cart-body">
                <div id="cart-body-time-arrived" class="p-4 my-5">
                    This product arrives by 6th Oct, 2pm
                </div>
                <div id="cart-body-products" class="p-4">
                    <div class="grid grid-cols-3 gap-6">
                        <div id="cart-body-product-image">
                            <img src="images/categories/hauwei.png" alt="Hauwei Phone">
                        </div>
                        <div>
                            <div id="cart-body-product-title">Apple Airpod with Charging Case</div>
                            <div id="cart-body-product-delivery-time" class="flex my-4">
                                <span>
                                    <img src="images/delivery-time-icon.png" alt="Delivery Time">
                                </span>
                                <span class="relative -top-1 left-1">1 day within Kano</span>
                            </div>
                            <div id="cart-body-product-remove">
                                Remove Product
                            </div>
                        </div>
                        <div>
                            <div id="cart-body-product-price">
                                N140,000
                            </div>
                            <div id="cart-body-product-add" class="flex justify-between w-3/4 py-2 px-4 rounded-full mt-11">
                                <div>-</div>
                                <div>1</div>
                                <div>+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cart-body-products" class="p-4">
                    <div class="grid grid-cols-3 gap-6">
                        <div id="cart-body-product-image">
                            <img src="images/categories/electronics.png" alt="Hauwei Phone">
                        </div>
                        <div>
                            <div id="cart-body-product-title">Apple Airpod with Charging Case</div>
                            <div id="cart-body-product-delivery-time" class="flex my-4">
                                <span>
                                    <img src="images/delivery-time-icon.png" alt="Delivery Time">
                                </span>
                                <span class="relative -top-1 left-1">1 day within Kano</span>
                            </div>
                            <div id="cart-body-product-remove">
                                Remove Product
                            </div>
                        </div>
                        <div>
                            <div id="cart-body-product-price">
                                N140,000
                            </div>
                            <div id="cart-body-product-add" class="flex justify-between w-3/4 py-2 px-4 rounded-full mt-11">
                                <div>-</div>
                                <div>1</div>
                                <div>+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cart-body-products" class="p-4">
                    <div class="grid grid-cols-3 gap-6">
                        <div id="cart-body-product-image">
                            <img src="images/categories/airpod.png" alt="Hauwei Phone">
                        </div>
                        <div>
                            <div id="cart-body-product-title">Apple Airpod with Charging Case</div>
                            <div id="cart-body-product-delivery-time" class="flex my-4">
                                <span>
                                    <img src="images/delivery-time-icon.png" alt="Delivery Time">
                                </span>
                                <span class="relative -top-1 left-1">1 day within Kano</span>
                            </div>
                            <div id="cart-body-product-remove">
                                Remove Product
                            </div>
                        </div>
                        <div>
                            <div id="cart-body-product-price">
                                N140,000
                            </div>
                            <div id="cart-body-product-add" class="flex justify-between w-3/4 py-2 px-4 rounded-full mt-11">
                                <div>-</div>
                                <div>1</div>
                                <div>+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Total  -->
                <div id="cart-total" class="px-16 py-5 my-5">
                    <div class="grid grid-cols-2 gap-6 py-1 w-full font-bold">
                        <div>Subtotal <span class="font-normal">(all products)</span></div>
                        <div class="text-right">₦140,000</div>
                        <div>Delivery Fee</div>
                        <div class="text-right">₦400</div>
                        <div>Estimated Total</div>
                        <div class="text-right">₦140,400</div>
                    </div>
                </div>
            </div>
            <!-- Checkout  -->
            <div id="cart-checkout" class="px-16 py-4 mt-5">
                <div class="grid grid-cols-2 gap-6 py-1 w-full font-bold">
                    <div>Estimated Product(s) Total)</div>
                    <div class="text-right text-xl">₦140,400</div>
                    <div>
                        <button class="mx-auto btn-yus-conti-shopping rounded-full w-full text-xl py-2 text-white">
                            Continue Shopping
                        </button>
                    </div>
                    <div>
                        <button class="mx-auto btn-yus rounded-full w-full text-xl py-2 text-white">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CartComponent',
    data(){
        return{
            displayCart: true
        }
    },
    methods:{
        closeCart(){
            if(this.displayCart == true){
                this.displayCart = false
            }else{
                this.displayCart = true
            }
        }
    },
    mounted() {
        console.log('Cart component mounted.')
    }
}
</script>