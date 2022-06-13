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
            <div @click="openTrackOrder()" class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Track Order</li></span>
            </div>
            <!-- Edit Profile  -->
            <div @click="openEditProfile()" class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
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
        <UserTrackOrder v-show="displayTrackOrder" />
        <UserProfile v-show="displayUserProfile" />
    </div>
</template>

<script>
import UserSubscription from './UserSubscriptionComponent'
import UserOrder from './UserOrdersComponent'
import UserTrackOrder from './UserTrackOrderComponent'
import UserProfile from './UserProfileComponent'

export default {
    name: 'UserAccountSettingsComponent',
    components:{
        UserSubscription,
        UserOrder,
        UserTrackOrder,
        UserProfile,
    },
    mounted() {
        this.$store.dispatch('loginUserFromDatabase')
    },
    data(){
        return{
            displayAcountContent: true,
            displayUserSubscription: false,
            displayUserOrder: false,
            displayTrackOrder: false,
            displayUserProfile: false,
        }
    },
    methods:{
        hideAccountContent(){
            // this.displayAcountContent = !this.displayAcountContent 
        },
        openSubscription(){
            this.displayUserOrder = false 
            this.displayTrackOrder = false 
            this.displayUserProfile = false 
            this.displayUserSubscription = !this.displayUserSubscription 
        },
        openMyOrders(){
            this.displayUserSubscription = false
            this.displayTrackOrder = false
            this.displayUserProfile = false
            this.displayUserOrder = !this.displayUserOrder
        },
        openTrackOrder(){
            this.displayUserSubscription = false
            this.displayUserOrder = false
            this.displayUserProfile = false
            this.displayTrackOrder = !this.displayTrackOrder
        },
        openEditProfile(){
            this.displayUserSubscription = false
            this.displayUserOrder = false
            this.displayTrackOrder = false
            this.displayUserProfile = !this.displayUserProfile
        }
    },
    computed: {
        getUser(){
            return this.$store.getters.getUser
        }
    }
}
</script>