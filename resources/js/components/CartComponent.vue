<template>
    <div v-show="displayCart" id="cart" class="shadow">
        <!-- Cart  -->
        <div v-show="bagItem">
            <div id="cart-content">
                <div id="cart-header" class="p-4 flex justify-between">
                    <span v-if="cartNo > 0">You have {{ cartNo }} items in you cart</span>
                    <span v-else>Cart</span>
                    <span @click="closeCart()" class="cursor-pointer">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                    </span> 
                </div>
                <div v-if="cartNo > 0" id="cart-body">
                    <div class="my-5">
                        <div v-if="isLoading" class="loader mx-auto mt-5"></div>
                        <div :key="product.product_id" v-for="product in getAllCart" id="cart-body-products" class="p-4">
                            <a :href="`/item/${product.slug}`">
                                <div class="grid grid-cols-3 gap-6 items-center">
                                    <div id="cart-body-product-image">
                                        <img style="height:75px;" :src="`https://dashboard.kahioja.com/assets/images/products/${product.photo}`" :alt="`${ product.name }`">
                                    </div>
                                    <div>
                                        <div id="cart-body-product-title">{{ product.name }} x {{product.quantity}}</div>
                                        <div id="cart-body-product-delivery-time" class="flex my-4 items-center">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/></svg>                 
                                            </span>
                                            <span class="relative left-1">
                                                {{ 
                                                    `Estimated Delivery Date: ${new Date(Date.now() + (86400000 * product.ship_fee)).getDate()}/${new Date(Date.now() + (86400000 * product.ship_fee)).getMonth() + 1}/${new Date(Date.now() + (86400000 * product.ship_fee)).getFullYear()}`
                                                }}
                                            </span>
                                        </div>
                                        <div class="hidden lg:block">
                                            <div class="cursor-pointer" @click="removeProduct(product.bagId)" id="cart-body-product-remove">
                                                <img class="mx-auto" style="width:25px;" src="/images/dustbin.png" alt="Remove Item">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <div id="cart-body-product-price">
                                            N{{ parseFloat(((product.subTotal))).toLocaleString() }}
                                        </div>
                                        <div class="hidden md:block">
                                            <div id="cart-body-product-add" class="flex justify-between w-3/4 rounded-full mt-11">
                                                <div class="cursor-pointer w-1/2 bg-yus rounded-l-full py-1 text-white border">
                                                    <button @click="minusProduct(product.bagId, product.quantity)"> - </button>
                                                </div>
                                                <input class="w-1/3 text-center bg-white" :value="product.quantity" disabled>
                                                <div class="cursor-pointer w-1/2 bg-yus rounded-r-full py-1 text-white border">
                                                    <button @click="addProduct(product.bagId, product.quantity)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //Mobile View  -->
                                <div class="grid grid-cols-2 gap-6 lg:hidden">
                                    <div class="cursor-pointer mx-auto" @click="removeProduct(product.bagId)" id="cart-body-product-remove">
                                        <img style="width:25px;" src="/images/dustbin.png" alt="Remove Item">
                                        <!-- Remove Product -->
                                    </div>
                                    <div id="cart-body-product-add" class=" flex justify-between w-3/4 rounded-full my-auto">
                                        <div class="cursor-pointer w-1/2 bg-yus rounded-l-full py-1 text-white border">
                                        <button @click="minusProduct(product.bagId, product.quantity)"> - </button>
                                        </div>
                                        <input class="w-1/3 text-center bg-white" :value="product.quantity" disabled>
                                        <div class="cursor-pointer w-1/2 bg-yus rounded-r-full py-1 text-white border">
                                            <button @click="addProduct(product.bagId, product.quantity)">+</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Cart Total  -->
                    <div v-if="cartNo > 0" id="cart-total" class="px-4 md:px-16 py-5 my-5">
                        <div class="grid grid-cols-2 gap-6 py-1 w-full font-bold">
                            <div>Subtotal <span class="font-normal">(all products)</span></div>
                            <div class="text-right">N{{ parseFloat(subTotal).toLocaleString() }}</div>
                            <div>Delivery Fee</div>
                            <div class="text-right">N{{ parseFloat(deliveryFee).toLocaleString() }}</div>
                            <div>Estimated Total</div>
                            <div class="text-right">N{{ estimatedTotal }}</div>
                        </div>
                    </div>
                </div>
                <!-- Cart Empty  -->
                <div id="cart-body-empty" v-else class="p-4 flex flex-col justify-center text-center">
                    <div class="mx-auto mt-20">
                        <svg width="206" height="203" viewBox="0 0 226 223" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M177.414 190.61C177.414 199.067 170.56 205.992 162.033 205.992C153.506 205.992 146.652 199.067 146.652 190.61C146.652 182.153 153.506 175.229 162.033 175.229C170.484 175.229 177.414 182.159 177.414 190.61Z" fill="#F37022" stroke="#F37022" stroke-width="3.91304"/><path d="M100.5 198.661C100.5 207.118 93.6463 214.042 85.1191 214.042C76.6679 214.042 69.7378 207.112 69.7378 198.661C69.7378 190.21 76.6679 183.28 85.1191 183.28C93.5762 183.28 100.5 190.134 100.5 198.661Z" fill="#F37022" stroke="#F37022" stroke-width="3.91304"/><path d="M162.245 165.66L162.241 165.661L73.9949 174.946C73.9939 174.946 73.9929 174.946 73.9919 174.946C57.4806 176.642 42.747 164.683 40.9717 148.253C40.9717 148.252 40.9716 148.252 40.9715 148.251L37.1517 112.158L185.11 96.6255L188.93 132.726L188.932 132.738C190.781 149.227 178.762 163.962 162.245 165.66Z" fill="#F37022" stroke="#F37022" stroke-width="3.91304"/><path d="M73.4417 90.0762L59.3248 91.4299C57.7528 64.7679 77.6964 41.0207 104.487 38.2413L104.492 38.2407C131.281 35.3843 155.672 54.3917 159.685 80.9099L145.405 82.4607C142.315 63.7423 124.955 50.4112 105.883 52.5095C86.822 54.527 72.6337 71.1495 73.4417 90.0762Z" fill="#F37022" stroke="#F37022" stroke-width="3.91304"/><path d="M63.9805 10.0605L79.4818 25.5619" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M23.332 32.7959L41.9336 51.3975" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M1.99892 106.113L23.2226 103.11" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M17.4766 174.374L31.6 160.251" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M125.984 206.411V220.879" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M193 160H224.003" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M175.59 39.6848L185.924 29.3506" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M132.875 1.79297V23.8393" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M193.359 67.583H210.004" stroke="#F37022" stroke-width="3" stroke-linecap="round"/><path d="M199.001 103.374L218.972 104.596" stroke="#F37022" stroke-width="3" stroke-linecap="round"/></svg>
                    </div>
                    <div class="my-6 font-bold text-lg">
                        <h2>Your bag is empty</h2>
                    </div>
                    <div class="mb-12">
                        <h3>Kahioja is here for just shop all goodies</h3>
                    </div>
                    <div @click="closeCart()">
                        <button class="mx-auto btn-yus rounded-full w-1/2 py-2 text-white">
                            Start shopping
                        </button>
                    </div>
                </div>
                <!-- Checkout  -->
                <div v-if="cartNo > 0" id="cart-checkout" class="px-4 md:px-16 py-4 mt-5 bg-white">
                    <div class="grid grid-cols-2 gap-6 py-1 w-full font-bold">
                        <div>Estimated Product(s) Total)</div>
                        <div class="text-right text-xl">₦{{ estimatedTotal }}</div>
                        <div @click="closeCart()">
                            <button class="mx-auto btn-yus-conti-shopping rounded-full w-full py-2 text-white">
                                Continue Shopping
                            </button>
                        </div>
                        <div @click="checkOut()">
                            <button class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subtracting to Cart  -->
            <div v-show="displaySubtractFromCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Reducing Item quantity
            </div>
            <!-- Subtracting to Cart  -->
            <div v-show="displaySubtractedFromCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Item quantity subtracted
            </div>
            <!-- adding to Cart  -->
            <div v-show="displayAddingToCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Adding Item quantity
            </div>
            <!-- added to Cart  -->
            <div v-show="displayAddedToCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Item quantity Added
            </div>
            <!-- remove for Cart  -->
            <div v-show="displayRemoveItemFromCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Removing Item
            </div>
            <!-- Item remove for Cart  -->
            <div v-show="removedItemFromCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Item removed
            </div>
            <!-- failed to Cart  -->
            <div v-show="displayFailToAddCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
                Please Try again
            </div> 
        </div>
        <div v-show="displaySignUpForm">
            <div id="cart-content">
                <div id="cart-header" class="p-4 flex justify-between">
                    <span>Create Account</span>
                    <span @click="closeSignUpForm()" class="cursor-pointer">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                    </span> 
                </div>
                <div id="cart-body">
                    <div class="my-5 py-6 text-center px-4 md:px-16">
                        <div v-if="isLoading" class="loader mx-auto"></div>        
                        <div class="mt-4">
                            {{ callback }}
                        </div>
                        <!-- SignUp Form  -->
                        <div v-show="signUpForm">
                            <div class="my-4">
                                Sign Up Now to enjoy amazing offers on Kahioja! 
                            </div>
                            <div class="my-4">
                                <div>
                                    <input required v-model="signUpName" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="text" name="name" id="signUpName" placeholder="Full Name">
                                </div>
                                <div>
                                    <input required v-model="signUpEmail" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="email" name="email" id="signUpEmail" placeholder="Email Address">
                                </div>
                                <div>
                                    <input required v-model="signUpPassword" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="password" name="password" id="signUpPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="my-8">
                                <button @keydown.enter="registerUser()" @click="registerUser()" class="mx-auto btn-yus rounded-full w-full py-3 text-white">
                                    Create account
                                </button>
                            </div>
                            <div @click="showLoginForm()" class="my-4 cursor-pointer">
                                Already have an account?
                            </div>
                            <div @click="showLoginForm()" class="my-8">
                                <button class="mx-auto btn-yus-conti-shopping rounded-full w-full py-2 text-black">
                                    Login
                                </button>
                            </div>
                        </div>
                        <!-- Login Form  -->
                        <div v-show="displayLoginForm">
                            <!-- <div class="my-4">
                                Log in into your account
                            </div> -->
                            <div class="my-4">
                                <div>
                                    <input required v-model="loginEmail" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="email" name="email" id="loginEmail" placeholder="Email Address">
                                </div>
                                <div>
                                    <input v-if="showPassword" @keydown.enter="loginUser()" required v-model="loginPassword" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="text" name="password" id="loginPassword" placeholder="Password">
                                    <input v-else @keydown.enter="loginUser()" required v-model="loginPassword" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="password" name="password" id="loginPassword" placeholder="Password">
                                </div>
                            </div>
                            <div @click="showForgotPasswordForm()" class="cursor-pointer flex justify-end my-4">
                                Forgot Password?
                            </div>
                            <div class="text-left my-4 items-center">
                                <span>
                                    <input @click="toggleShow" type="checkbox" name="signed">
                                </span>
                                <span>
                                    Show Password 
                                </span>
                            </div>
                            <div class="my-8">
                                <button id="loginBtn" @click="loginUser()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                    Login
                                </button>
                            </div>
                            <div @click="showSignUpForm()" class="my-4 cursor-pointer">
                                Do not have an account?
                            </div>
                            <div @click="showSignUpForm()" class="my-8">
                                <button class="mx-auto btn-yus-conti-shopping rounded-full w-full py-3 text-black">
                                    Create account
                                </button>
                            </div>
                        </div>
                        <!-- Forgot Password Form  -->
                        <div v-show="displayForgotPasswordForm">
                            <div class="my-8">
                                Enter the email address your register your account. We will send you a verification link to reset your account.
                            </div>
                            <div class="my-4">
                                <div>
                                    <input required v-model="forgotPasswordEmail" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="text" name="forgotPasswordEmail" id="ForgotPasswordEmail" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="my-8">
                                <button @click="forgotPassword()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                    Submit
                                </button>
                            </div>
                            <div @click="showLoginForm()" class="my-4 cursor-pointer">
                                <span>Remember your password?</span>
                                <span class="ml-2">Sign in</span>
                            </div>
                        </div>
                        <!-- Verify Email Form  -->
                        <div v-show="verifyEmailForm">
                            <div class="my-8">
                                Enter your Verification Code sent to your Email
                            </div>
                            <div class="my-4">
                                <div>
                                    <input required v-model="verificationCode" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="text" name="verificationCode" id="verificationCode" placeholder="Enter your Verification Code">
                                </div>
                            </div>
                            <div class="my-8">
                                <button @click="verifyCode()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                    Submit
                                </button>
                            </div>
                        </div>
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
            showPassword: false,
            password: null,
            cart: [],
            user: [],
            displayCart: true,
            displaySubtractFromCart: false,
            displaySubtractedFromCart: false,
            displayAddingToCart: false,
            displayAddedToCart: false,
            displayFailToAddCart: false,
            displayRemoveItemFromCart: false,
            removedItemFromCart: false,
            displayLoginForm: false,
            displayForgotPasswordForm: false,
            bagItem: true,
            displaySignUpForm: false,
            signUpForm: true,
            verifyEmailForm: false,
            loginEmail: '',
            loginPassword: '',
            signUpName: '',
            signUpEmail: '',
            signUpPassword: '',
            verification_code: '',
            isLoading: '',
            callback: ''
        }
    },
    computed: {
        getAllCart(){ 
            return this.cart = this.$store.getters.getCart
        },
        getUser(){
            return this.user = this.$store.getters.getUser
        },
        cartNo(){
            return this.$store.getters.addCart
        },
        subTotal(){
            return this.$store.getters.subTotal 
        },
        deliveryFee(){
            return this.$store.getters.deliveryFee   
        },
        estimatedTotal(){
            return parseFloat(((this.subTotal) + (this.deliveryFee))).toLocaleString()
        }
    },
    methods:{
        toggleShow(){
            this.showPassword = !this.showPassword
        },
        async minusProduct(id, quantity){
            if(quantity > 1){
                this.displaySubtractFromCart = !this.displaySubtractFromCart
                setTimeout(()=>{
                    this.displaySubtractFromCart = !this.displaySubtractFromCart
                }, 3000)
                quantity--
                axios.post(`/reducebyone/${id}/${quantity}`).then(response => {
                    let cart = this.cart = response.data
                    this.$store.dispatch("allCartFromDatabase")
                    setTimeout(()=>{
                        this.displaySubtractedFromCart = !this.displaySubtractedFromCart
                    }, 3000)
                    this.displaySubtractedFromCart = !this.displaySubtractedFromCart
                }).catch(error => {
                    setTimeout(()=>{
                        this.displayFailToAddCart = !this.displayFailToAddCart
                    }, 3000)
                })
            } 
        },
        async addProduct(id, quantity){
            if(quantity >= 1){
                this.displayAddingToCart = !this.displayAddingToCart
                setTimeout(()=>{
                    this.displayAddingToCart = !this.displayAddingToCart
                }, 3000)
                quantity++
                axios.post(`/addbyone/${id}/${quantity}`).then(response => {
                    this.cart = response.data
                    this.$store.dispatch("allCartFromDatabase")
                    setTimeout(()=>{
                        this.displayAddedToCart = !this.displayAddedToCart
                    }, 3000)
                    this.displayAddedToCart = !this.displayAddedToCart
                }).catch(error => {
                    setTimeout(()=>{
                        this.displayFailToAddCart = !this.displayFailToAddCart
                    }, 3000)
                })
            }
        },
        async removeProduct(id){
            this.displayRemoveItemFromCart = !this.displayRemoveItemFromCart
            setTimeout(()=>{
                this.displayRemoveItemFromCart = !this.displayRemoveItemFromCart
            }, 3000)
            axios.get(`/removeproduct/${id}/`).then(response => {
                this.cart = response.data
                this.$store.dispatch("allCartFromDatabase")
                setTimeout(()=>{
                    this.removedItemFromCart = !this.removedItemFromCart
                }, 3000)
                this.removedItemFromCart = !this.removedItemFromCart
            }).catch(error => {
                setTimeout(()=>{
                    this.displayFailToAddCart = !this.displayFailToAddCart
                }, 3000)
            })
        },
        showLoginForm(){
            this.displayLoginForm = true 
            this.signUpForm = false
            this.displayForgotPasswordForm = false
            this.verifyEmailForm = false
        },
        showSignUpForm(){
            this.signUpForm = true  
            this.displayLoginForm = false 
            this.displayForgotPasswordForm = false 
        },
        showForgotPasswordForm(){
            this.displayForgotPasswordForm = true 
            this.displayLoginForm = false
            this.signUpForm = false
        },
        async registerUser(){
            this.isLoading = true 
            if(this.signUpName !== ''){
                if(this.signUpEmail !== ''){
                    if(this.signUpPassword !== ''){
                        axios.post('/register', {
                            name: this.signUpName,
                            email: this.signUpEmail,
                            password: this.signUpPassword
                        }).then(response => {
                            this.signUpName = '',
                            this.signUpEmail = '',
                            this.signUpPassword = '',

                            this.isLoading = false
                            this.callback = response.data

                            if(this.callback[0] == 'The email has already been taken.'){
                                this.callback = 'The email address has already been taken'
                            }

                            if(this.callback[0] == 'The password must be at least 8 characters'){
                                this.callback = 'The password must be at least 8 characters'
                            }

                            if(this.callback[0] == 'The password must not be greater than 16 characters'){
                                this.callback = 'The password must not be greater than 16 characters'
                            }

                            if(this.callback == 'You need to verify your account'){
                                this.callback = ''
                                this.verifyEmailForm = true
                                this.signUpForm = false
                            }

                        }).catch(error => {
                            console.log(error)
                        })
                    }else{
                        this.isLoading = false
                        this.callback = 'Password field empty'
                    }
                }else{
                    this.isLoading = false
                    this.callback = 'Email field empty'
                }
            }else{
                this.isLoading = false
                this.callback = 'Name field empty'
            }
        },
        async verifyCode(){
            this.isLoading = true
            
            if(this.verificationCode != ''){
                axios.post('/register/verify/guest', {
                    verification_link: this.verificationCode,
                }).then(response => {
                    this.verificationCode = '',

                    this.isLoading = false
                    this.callback = response.data

                    if(this.callback == 'Your Email has been Verified Successfully'){
                        setTimeout(()=>{
                            window.location = '/checkout'
                        }, 3000)
                    }

                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.callback = 'Email Address field empty'
            }
        },
        async loginUser(){
            
            document.getElementById('loginBtn').innerText = 'Authenticating...'
          
            if(this.loginEmail !== ''){
                if(this.loginPassword !== ''){
                    axios.post('/login', {
                        email: this.loginEmail,
                        password: this.loginPassword
                    }).then(response => {
                        this.loginEmail = '',
                        this.loginPassword = '',

                        this.isLoading = false

                        this.callback = response.data

                        //If Email not verified
                        if(this.callback == 'Your Email is not Verified!'){
                            setTimeout(()=>{
                                this.callback = ''
                                document.getElementById('loginBtn').innerText = 'Login'
                            }, 3000)
                        }

                        //If Account Banned
                        else if(this.callback == 'Your Account Has Been Banned'){
                            setTimeout(()=>{
                                this.callback = ''
                                document.getElementById('loginBtn').innerText = 'Login'
                            }, 3000)
                        }

                        // If Wrong Password 
                        else if(this.callback == 'Wrong Email and Password Combination'){
                            document.getElementById('loginBtn').innerText = 'Wrong Email and Password Combination'
                            setTimeout(()=>{
                                this.callback = ''
                                document.getElementById('loginBtn').innerText = 'Login'
                            }, 3000)
                        }else{
                            setTimeout(()=>{
                                this.callback = ''
                                document.getElementById('loginBtn').innerText = 'Login successful...'
                                window.location = '/checkout'
                            }, 3000)
                        }
                        

                    }).catch(error => {
                        console.log(error)
                    })
                }else{
                    this.callback = 'Password field empty'
                }
            }else{
                this.callback = 'Email Address field empty'
                setTimeout(()=>{
                    this.callback = ''
                    document.getElementById('loginBtn').innerText = 'Login'
                }, 3000)
            }
        },
        async forgotPassword(){
            this.isLoading = true
            
            if(this.forgotPasswordEmail != ''){
                axios.post('/forgot', {
                    email: this.forgotPasswordEmail,
                }).then(response => {
                    this.forgotPasswordEmail = '',

                    this.isLoading = false
                    this.callback = response.data

                    setTimeout(()=>{
                        window.location = '/'
                    }, 3000)

                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.callback = 'Email Address field empty'
            }
        },
        closeCart(){
            let cart = this.car
            this.displayCart = !this.displayCart 
            this.$store.dispatch("allCartFromDatabase")
        },
        closeSignUpForm(){
            this.displaySignUpForm = !this.displaySignUpForm
            this.displayLoginForm = !this.displayLoginForm
            this.bagItem = !this.bagItem
        },
        checkOut(){
            if(this.getUser != ''){
                window.location = '/checkout'
            }else{
                this.bagItem = !this.bagItem
                this.displaySignUpForm = !this.displaySignUpForm
            }
        }
    }, 
}
</script>