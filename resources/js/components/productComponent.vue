<template>
    <div class="bg-white rounded-lg px-4 my-4 cursor-pointer yus-shadow">
        <a :href="productlink">

            <img class="w-64 mx-auto py-4" :src="productimage" :alt="productname">
            <!-- Product Details  -->
            <div class="py-3">
                <h1 style="display:none;">{{ productid }}</h1>
                <h1 class="card-title">{{ productname }}</h1>
                <div class="flex items-center">
                    <span class="card-curr-price"><b>{{ productcurrprice }}</b></span>
                    <span class="card-prev-price"><b>{{ productprevprice }}</b></span>
                </div>
                <div class="flex items-center">
                    <div class="flex mr-4">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                    </div>
                    <div class="card-reviews">120 Reviews</div>
                </div>
                <span class="flex card-reviews my-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93408 6.64286H12.5357" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93408 9.31318H9.79123" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8282 21.3916C13.4029 21.3916 13.8688 20.9257 13.8688 20.351C13.8688 19.7762 13.4029 19.3104 12.8282 19.3104C12.2535 19.3104 11.7876 19.7762 11.7876 20.351C11.7876 20.9257 12.2535 21.3916 12.8282 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9689 21.3916C20.5436 21.3916 21.0095 20.9257 21.0095 20.351C21.0095 19.7762 20.5436 19.3104 19.9689 19.3104C19.3942 19.3104 18.9283 19.7762 18.9283 20.351C18.9283 20.9257 19.3942 21.3916 19.9689 21.3916Z" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.788 20.3796H11.1921C11.1716 20.3796 11.152 20.3714 11.1375 20.357C11.123 20.3425 11.1148 20.3228 11.1148 20.3023V14.8242C11.1148 14.8037 11.123 14.7841 11.1375 14.7696C11.152 14.7551 11.1716 14.7469 11.1921 14.7469H19.4484C19.5066 14.7469 19.564 14.7601 19.6164 14.7854C19.6688 14.8107 19.7148 14.8475 19.7509 14.8931L21.7853 17.4579C21.8395 17.5261 21.869 17.6107 21.869 17.6979V20.3024C21.869 20.3125 21.867 20.3226 21.8631 20.332C21.8592 20.3413 21.8535 20.3498 21.8463 20.357C21.8392 20.3642 21.8306 20.3699 21.8213 20.3738C21.8119 20.3776 21.8018 20.3796 21.7917 20.3796H21.0097" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9286 20.3796H13.8688" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4836 14.747V20.3509" stroke="#222222" stroke-width="1.35205" stroke-miterlimit="10" stroke-linecap="round"/></svg> 
                    1 Day Delivery within Kano
                </span>
            </div>
        </a>

        <div>
            <button @click="addToBag()" class="mx-auto relative top-5 md:top-8 btn-yus rounded-full w-full md:w-2/3 flex flex-row justify-center items-center py-2 text-white">
                <div class="card-bag-label">
                    Add to Bag 
                </div>
                <div class="ml-2">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/></svg>
                </div> 
            </button>
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
    ],
    data(){
        return{
            cart: [],
        }
    },
    methods:{
        async addToBag(){
            axios.post('/addtobag', {
                product_id: this.productid,
                quantity: 1
            }).then(response => {
                this.cart = response.data
                console.log('Added')
                this.cart = this.$store.dispatch("allCartFromDatabase")
            }).catch(error => {
                console.log(error)
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