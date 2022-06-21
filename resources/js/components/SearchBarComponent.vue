<template>
    <!-- Search Box  -->
    <div id="search_box" class="my-3 lg:my-0 col-span-3 w-full text-center mx-auto">
        <div class="flex items-center">
            <input autocomplete="off" @keyup="searchProduct()" v-model="search_box" placeholder="Search products, brands and categories" class="search_box pr-14 pl-8 focus:outline-none" type="text" name="search">
            <button class="relative -left-12 p-2 rounded-full" style="background-color:#F37022;" type="submit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.8419 17.9347C11.8327 17.9347 12.8138 17.7395 13.7292 17.3604C14.6446 16.9812 15.4763 16.4254 16.177 15.7248C16.8776 15.0242 17.4333 14.1924 17.8125 13.277C18.1917 12.3616 18.3868 11.3805 18.3868 10.3897C18.3868 9.39889 18.1917 8.41777 17.8125 7.50237C17.4333 6.58697 16.8776 5.75522 16.177 5.0546C15.4763 4.35399 14.6446 3.79823 13.7292 3.41906C12.8138 3.03988 11.8327 2.84473 10.8419 2.84473C8.8408 2.84473 6.92171 3.63964 5.50675 5.0546C4.09179 6.46956 3.29688 8.38866 3.29688 10.3897C3.29688 12.3908 4.09179 14.3099 5.50675 15.7248C6.92171 17.1398 8.8408 17.9347 10.8419 17.9347V17.9347ZM18.7892 16.559L23.2911 21.0608C23.4111 21.1769 23.5068 21.3157 23.5726 21.4692C23.6384 21.6227 23.6729 21.7877 23.6743 21.9547C23.6756 22.1216 23.6437 22.2872 23.5803 22.4417C23.517 22.5962 23.4235 22.7365 23.3054 22.8545C23.1872 22.9725 23.0468 23.0658 22.8922 23.1289C22.7376 23.192 22.572 23.2237 22.405 23.2221C22.238 23.2206 22.0731 23.1858 21.9197 23.1198C21.7663 23.0537 21.6276 22.9579 21.5117 22.8377L17.0099 18.3358C14.9884 19.905 12.4449 20.6448 9.89717 20.4047C7.34943 20.1645 4.98897 18.9625 3.29631 17.0432C1.60365 15.1239 0.706037 12.6318 0.786191 10.074C0.866345 7.5162 1.91824 5.08511 3.72775 3.2756C5.53726 1.4661 7.96835 0.414196 10.5261 0.334042C13.0839 0.253888 15.5761 1.1515 17.4953 2.84416C19.4146 4.53682 20.6167 6.89728 20.8568 9.44502C21.097 11.9928 20.3571 14.5363 18.788 16.5577L18.7892 16.559Z" fill="white"/></svg>
            </button>
        </div>
        <div v-show="showCallBack" id="search-bar-callback" class="text-left bg-white yus-shadow">
            <div v-if="isLoading" class="loader mx-auto"></div>
            <div v-if="products.length > 0">
                <div :key="product.id" v-for="product in products" class="text-sm py-1 border-b">
                    <a :href="`/item/${product.slug}`">
                        <div class="flex px-3">
                            <div class="flex items-center">
                                <div>
                                    <img style="width:60px; height:60px" :src="`https://dashboard.kahioja.com/assets/images/products/${product.photo}`" alt="">
                                </div>
                                <div class="flex-col ml-3">
                                    <div><b>{{ product.name }}</b></div>
                                    <div><b>Price</b>: ₦{{ product.price }}</div>
                                    <div><b>Delivery Fee</b>: {{ (product.ship_fee != null) ? `₦${product.ship_fee}`: ' Free Delivery' }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div v-else class="text-center py-2">
                Item not found...
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'searchBar',
    data(){
        return{
            search_box: '',
            products: [],
            showCallBack: false,
            isLoading: false
        }
    },
    methods:{
        async searchProduct(){
            let product = this.search_box
            if(product.length > 2){
                this.showCallBack = true
                this.isLoading = true
                axios.get(`/autosearch/product/${product}`, {
                    slug: this.product
                }).then(response => {
                    this.isLoading = false

                    // if(response.data.length == 0){
                    //     this.showCallBack = false
                    // }

                    this.products = response.data
                    console.log(response.data)
                
                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.showCallBack = false
            }
        }
    }
    
}
</script>