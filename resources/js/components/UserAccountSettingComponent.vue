<template>
    <!-- Account Settings  -->
    <div v-show="displayAccountSettings" id="account-settings" class="text-black z-50 top-20 bg-white shadow-md w-1/6 p-4">
        <ul>
            <li class="border-b py-2 text-sm">Track Order</li>
            <li class="border-b py-2 text-sm">Account Settings</li>
            <a href="/logout">
                <li class="py-2 text-sm">Logout</li>
            </a>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'UserAccountSettingsComponent',
}
</script>