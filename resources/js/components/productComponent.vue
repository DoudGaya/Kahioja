<template>
    <div class="bg-white rounded-lg px-4 my-4 cursor-pointer yus-shadow">
        <a :href="productlink">

            <!-- <img class="w-64 mx-auto py-4" :src="`https://dashboard.kahioja.com/assets/images/thumbnails/${productimage}`" :alt="productname"> -->
            <img style="width:300px; height:250px;" class="object-cover py-4" :src="`https://dashboard.kahioja.com/assets/images/products/${productimage}`">
            <!-- Product Details  -->
            <div class="py-3 mt-3">
                <h1 style="display:none;">{{ productid }}</h1>
                <h1 class="card-title w-full">{{ productname }}</h1>
                <div class="flex items-center">
                    <span class="card-curr-price"><b>₦{{ productcurrprice }}</b></span>
                    <span v-if="productpreprive != null" class="card-prev-price"><b>₦{{ productprevprice }}</b></span>
                </div>
                <div class="grid grid-cols-2 text-left md:flex md:flex-row card-reviews my-2">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    </div>
                    &nbsp;
                    <div>{{ productdeliveryfee }}</div>
                </div>
                <div class="grid grid-cols-2 text-left md:flex md:flex-row card-reviews my-2">
                    <div>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9157 22.0795C20.4602 22.0795 22.5229 20.0168 22.5229 17.4724C22.5229 14.9279 20.4602 12.8652 17.9157 12.8652C15.3713 12.8652 13.3086 14.9279 13.3086 17.4724C13.3086 20.0168 15.3713 22.0795 17.9157 22.0795Z" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M17.918 14.3809V17.4716L20.0307 18.7586" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M11.7867 20.5781H3.99866C3.80839 20.5781 3.62592 20.5025 3.49138 20.368C3.35683 20.2335 3.28125 20.051 3.28125 19.8607V4.79554C3.28125 4.60527 3.35683 4.42279 3.49138 4.28825C3.62592 4.15371 3.80839 4.07812 3.99866 4.07812H20.5638C20.7541 4.07812 20.9366 4.15371 21.0711 4.28825C21.2057 4.42279 21.2813 4.60527 21.2813 4.79554V11.8171" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 6.9707H12.8165" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 9.64062H10.072" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    </div> 
                    &nbsp;
                    <div>1 Day Delivery within Kano</div>
                </div>
            </div>
        </a>

        <div>
            <button @click="addToBag()" class="focus:outline-0 mx-auto relative top-5 lg:top-8 btn-yus rounded-full w-full md:w-2/3 sm:w-full flex flex-row justify-center items-center md:p-2 text-white">
                <div class="card-bag-label">
                    Add to Bag 
                </div>
                <div class="lg:ml-1">
                    <svg id="bag-icon" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/></svg>
                </div> 
            </button>
        </div>
        <!-- adding to Cart  -->
        <div v-show="displayAddToCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
            Adding Item to Cart
        </div>
        <!-- added to Cart  -->
        <div v-show="displayAddedToCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
            Item Added to Cart
        </div>
        <!-- failed to Cart  -->
        <div v-show="displayFailToAddCart" id="addCartNotification" class=" bg-gray-500 text-white md:py-4 py-3 md:px-8 px-3 text-xs text-center rounded-full border-white">
            Please Try again
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProductComponent',
    props:[
        'productid',
        'productlink',
        'productimage',
        'productname',
        'productcurrprice',
        'productprevprice',
        'productdeliveryfee'
    ],
    data(){
        return{
            cart: [],
            displayAddToCart: false,
            displayAddedToCart: false,
            displayFailToAddCart: false
        }
    },
    methods:{
        async addToBag(){
            this.displayAddToCart = !this.displayAddToCart
            setTimeout(()=>{
                this.displayAddToCart = !this.displayAddToCart
            }, 3000)
            axios.post('/addtobag', {
                product_id: this.productid,
                product_price: this.productcurrprice,
                product_delivery_fee: this.productdeliveryfee,
                quantity: 1
            }).then(response => {
                this.cart = response.data
                this.cart = this.$store.dispatch("allCartFromDatabase")
                this.displayAddedToCart = !this.displayAddedToCart
                setTimeout(()=>{
                    this.displayAddedToCart = !this.displayAddedToCart
                }, 3000)
            }).catch(error => {
                console.log(error)
                this.displayFailToAddCart = !this.displayFailToAddCart
                setTimeout(()=>{
                    this.displayFailToAddCart = !this.displayFailToAddCart
                }, 3000)
            })
        }
    },
    computed:{
        getAllCart(){ 
            return this.cart = this.$store.dispatch("allCartFromDatabase")
        }
    },   
}
</script>