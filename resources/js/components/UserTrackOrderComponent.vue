<template>
    <!-- User Track order  -->
    <div v-show="displayUserTrackOrder" id="cart" class="shadow"> 
        <div id="cart-content">
            <div id="cart-header" class="p-4 flex justify-between">
                <span>Track Order</span>
                <span @click="closeTrackOrder()" class="cursor-pointer">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                </span> 
            </div>
            <div id="cart-body" class="bg-gray-200 text-sm">
                <div v-if="isLoading" class="loader mx-auto my-5"></div>
                <div v-show="searchOrder" class="bg-white py-6 text-center px-4 md:px-16 shadow my-3">
                    <div class="my-4 m-auto">
                        <div>
                            <input autocomplete="off" @keyup="submitOrder()" @keydown.enter="submitOrder()" required v-model="trackOrderInput" class="input-box" type="text" name="email" id="trackOrderInput" placeholder="Enter the Order Number">
                        </div>
                        <div @click="submitOrder()" class="my-8">
                            <button class="mx-auto btn-yus rounded-full w-full py-2 text-white text-lg">
                                Track Order
                            </button>
                        </div>
                    </div>
                </div>
                <div v-show="orderDetails" class="bg-white my-3">
                    <div v-if="checkOrder.length > 0">
                        <div :key="order.id" v-for="order in checkOrder" id="cart-body-products" class="py-4 lg:px-8 px-5 border-b-2 bg-white my-3">
                            <div class="border-b">
                                <div v-if="(order.order_no != null)" class="py-1">
                                    <b>Order ID</b>: {{ order.order_no}}
                                </div>
                                <div class="py-1">
                                    <b>Order Time</b>: {{ new Date(order.time_ordered).toLocaleString() }}
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 items-center border-b py-3">
                                <div class="col-span-1">
                                    <img style="width: 100px; height: 100px; border: 1px solid #ddd;" :src="`https://dashboard.kahioja.com/assets/images/products/${order.product_photo}`">
                                </div>
                                <div class="col-span-2">
                                    <div class="grid grid-cols-3 gap-2">
                                        <span class="col-span-1"><b>Product:</b></span>
                                        <span class="col-span-2">{{ order.product_name }}</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <span class="col-span-1"><b>Shop:</b></span>
                                        <span class="col-span-2">{{ order.shop_name }}</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <span class="col-span-1"><b>Shop Address:</b></span>
                                        <span class="col-span-2">{{ order.shop_address }}</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <span class="col-span-1"><b>Shop Phone:</b></span>
                                        <span class="col-span-2">{{ order.shop_number }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="flex justify-between py-1">
                                    <b><span>Quantity</span></b>
                                    <span>X{{ order.quantity }}</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <b><span>Total Amount</span></b>
                                    <span>N{{ order.amount }}</span>
                                </div>
                                <div v-if="(order.paid == 'paid')" class="flex justify-between py-1">
                                    <b><span>Delivery Status</span></b>
                                    <span v-if="(order.order_status == 'pending' || order.order_status == 'processing' || order.order_status == 'completed')">Processing</span>
                                    <span v-if="(order.order_status == 'accept delivery' || order.order_status == 'pick up for delivery' || order.order_status == 'on delivery')">On Delivery</span>
                                    <span v-if="(order.order_status == 'delivered')">Deliveried</span>
                                    <span v-if="(order.order_status == 'declined')">Declined</span>
                                </div>
                            </div>
                            <div v-if="(order.paid == 'unpaid')" class="my-3">
                                <form action="/buynow" method="POST">
                                    <input type="hidden" name="_token" :value="csrf">
                                    <input type="hidden" name="product_id" :value="order.product_id">
                                    <input type="hidden" name="quantity" :value="order.quantity">
                                    <input @click="payNow()" value="Pay Now" type="submit" class="rounded-full flex justify-center mx-auto btn-yus w-full py-3 lg:w-1/2 lg:py-4 text-white">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-else class="text-center text-2xl p-4">
                        Order not Found!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'UserTrackOrder',
    data(){
        return{
            displayUserTrackOrder: true,
            searchOrder: true,
            orderDetails: false,
            isLoading: false,
            callback: '',
            trackOrderInput: '',
            checkOrder: [],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods:{
        async submitOrder(){
            let order_no = this.trackOrderInput
            if(order_no.length > 5){
                this.isLoading = true
                this.orderDetails = true
                axios.get(`/ordertrack/${order_no}`, {
                    slug: this.trackOrderInput
                }).then(response => {
                    this.isLoading = false
                    this.orderDetails = true
                    this.checkOrder = response.data
                    console.log(response.data)
                
                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.orderDetails = false
            }
        },
        closeTrackOrder(){
            if(this.displayUserTrackOrder == true){
                this.displayUserTrackOrder = false 
            }else{
                this.displayUserTrackOrder = true
            }
        }
        
    }
}
</script>

<style scoped>
    #vieworder{
        margin: 2vh auto;
    }
    #cart-body{
        max-height: 100vh;
    }
</style>