<template>
    <!-- Account Settings  -->
    <div v-show="displayAccountSettings" id="account-settings" class="text-black top-20 bg-white shadow-md p-4 hidden lg:block">
        <div v-show="displayAcountContent" @click="hideAccountContent()" id="account-settings-content" class="bg-white text-black shadow-md">
            <!-- Vendor Panel  -->
            <div v-if="getUser.is_vendor == 2" class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <a target="_blank" href="https://dashboard.kahioja.com/user/login/">
                    <span><li class="text-sm list-none">Vendor Panel</li></span>
                </a>
            </div>
            <div @click="openSubscription()" v-else class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Start Selling</li></span>
            </div>
            <!-- My Orders  -->
            <div @click="openMyOrders()" class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">My Orders</li></span>
            </div>
            <!-- Track Order  -->
            <div class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Track Order</li></span>
            </div>
            <!-- Edit Profile  -->
            <div class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Edit Profile</li></span>
            </div>
            <!-- Reset Password  -->
            <div class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Reset Password</li></span>
            </div>
            <!-- Logout  -->
            <div class="border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <a href="/logout">
                    <span><li class="text-sm list-none">Logout</li></span>
                </a>    
            </div>
        </div>
        <UserSubscription v-show="displayUserSubscription" />
        <UserOrder v-show="displayUserOrder" />
    </div>
</template>

<script>
import UserSubscription from './UserSubscriptionComponent'
import UserOrder from './UserOrdersComponent'

export default {
    name: 'UserAccountSettingsComponent',
    components:{
        UserSubscription,
        UserOrder
    },
    mounted() {
        this.$store.dispatch('loginUserFromDatabase')
    },
    data(){
        return{
            displayAcountContent: true,
            displayUserSubscription: false,
            displayUserOrder: false,
        }
    },
    methods:{
        hideAccountContent(){
            // this.displayAcountContent = !this.displayAcountContent 
        },
        openSubscription(){
            this.displayUserOrder = !this.displayUserOrder 
            this.displayUserSubscription = !this.displayUserSubscription 
        },
        closeSubscription(){
            this.displayUserSubscription = !this.displayUserSubscription 
            this.displayAcountContent = !this.displayAcountContent 
        },
        openMyOrders(){
            this.displayUserOrder = !this.displayUserOrder
        }
    },
    computed: {
        getUser(){
            return this.$store.getters.getUser
        }
    }
}
</script>