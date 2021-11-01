<template>
    <div id="cart" class="shadow">
        <div id="cart-content">
            <div id="cart-header" class="p-4 flex justify-between">
                <span>
                    You have (3) items in you cart
                </span>
                <span>
                    <img src="images/close-icon.png" alt="Close Icon">
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
    mounted() {
        console.log('Cart component mounted.')
    }
}
</script>