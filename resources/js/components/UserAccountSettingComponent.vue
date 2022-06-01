<template>
    <!-- Account Settings  -->
    <div v-show="displayAccountSettings" id="account-settings" class="text-black top-20 bg-white shadow-md p-4">
        <div v-show="displayAcountContent" @mouseleave="hideAccountContent()" id="account-settings-content" class="bg-white text-black shadow-md">
            <!-- Vendor Panel  -->
            <div class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
                <span><li class="text-sm list-none">Vendor Panel</li></span>
            </div>
            <!-- My Orders  -->
            <div class="flex border-b p-3 items-center cursor-pointer hover:bg-gray-100">
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
    </div>
</template>

<script>
export default {
    name: 'UserAccountSettingsComponent',
    data(){
        return{
            displayAcountContent: true,
        }
    },
    methods:{
        hideAccountContent(){
            // this.displayAcountContent = !this.displayAcountContent 
        }
    }
}
</script>