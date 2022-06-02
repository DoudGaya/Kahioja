<template>
    <!-- User Subscription  -->
    <div v-show="displayUserSubscription" id="cart" class="shadow"> 
        <div id="cart-content">
            <div id="cart-header" class="p-4 flex justify-between">
                <span>Vendor Subscription</span>
                <span @click="closeSubscription()" class="cursor-pointer">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                </span> 
            </div>
            <div id="cart-body">
                <div v-if="isLoading" class="loader mx-auto my-5"></div>
                <div v-show="subscriptionList">
                    <div :key="subs.id" v-for="subs in packages.subs" id="cart-body-products" class="p-4 text-center">
                        <div class="text-2xl font-semibold">{{ subs.title }}</div>
                        <div v-if="subs.price == 0" class="text-xl font-bold">Free Subscription</div>
                        <div v-else class="text-xl font-bold">{{ subs.currency }}{{ subs.price }}</div>
                        <div class="text-lg font-normal">{{ subs.days }} Days</div>
                        <div v-html="subs.details" />
                        <div class="my-3">
                            <button @click="getStarted(subs.id, subs.title, subs.currency, subs.price, subs.days, subs.allowed_products)" class="mx-auto btn-yus rounded-full lg:w-1/2 w-full py-2 text-white">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
                <div v-show="subscribe" id="subscribe" class="text-center">
                    <div class="grid grid-cols-2 gap-4 p-4 border-b items-center">
                        <div class="text-lg text-right">Plan:</div>
                        <div><input disabled class="bg-white focus:outline-none text-left" v-model="title" /></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-4 border-b items-center">
                        <div class="text-lg text-right">Price:</div>
                        <div class="flex items-center">
                            {{currency}}
                            <input disabled class="bg-white focus:outline-none text-left" v-model="price" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-4 border-b items-center">
                        <div class="text-lg text-right">Duration:</div>
                        <div><input disabled class="bg-white focus:outline-none text-left" v-model="days" /></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-4 border-b items-center">
                        <div class="text-lg text-right">Product(s) Allowed:</div>
                        <div>
                            <input v-if="products > 0" disabled class="bg-white focus:outline-none text-left" v-model="products" />
                            <input v-else disabled class="bg-white focus:outline-none text-left" value="Unlimited" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-4 border-b items-center">
                        <div class="text-lg text-right">Service Fee:</div>
                        <div class="flex items-center">
                            {{currency}}
                            <input disabled class="bg-white focus:outline-none text-left" :value="Math.ceil(parseFloat((1.4 / 100) * parseInt(price)).toFixed(2))" />
                        </div>
                    </div>
                    <div class="my-8">
                        <input value="Subscribe" type="button" @click="confirmOrder()" class="flex justify-center mx-auto btn-yus rounded-full w-full py-5 lg:w-1/2 lg:py-4 text-white"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'UserSubscription',
    data(){
        return{
            displayUserSubscription: false,
            subscriptionList: true,
            subscribe: false,
            isLoading: Boolean,
            packages: [],
            id: '',
            title: '',
            currency: '',
            price: '',
            days: '',
            products: ''
        }
    },
    async created(){
        this.isLoading = true
        axios.get(`/package`).then(response => {
            this.isLoading = false
            this.packages = response.data;
        }).catch(error => {
            console.log(error)
        })
    },
    methods:{
        getStarted(id, title, currency, price, days, products){
            this.id = id 
            this.title = title 
            this.currency = currency 
            this.price = price
            this.days = days+' days' 
            this.products = products
            this.subscriptionList = !this.subscriptionList
            this.subscribe = !this.subscribe
        },
        closeSubscription(){
            this.subscribe = !this.subscribe
            this.subscriptionList = !this.subscriptionList
            this.displayUserSubscription = !this.displayUserSubscription 
        },
    }
}
</script>

<style>
    .loader{
        margin-top: 30vh;
    }
    #subscribe{
        margin: 10vh auto;
    }
</style>