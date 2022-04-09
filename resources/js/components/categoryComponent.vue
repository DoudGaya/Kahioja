<template>
    <div id="category-nav" class="grid grid-cols-2 gap-4">
        <div class="flex">
            <!-- Categories  -->
            <button @click="categoryBtn()" class="flex justify-between items-center mr-12">
                <span class="mr-3">Categories</span> 
                <span><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07163 5.31388L12.0216 0.363882C12.1139 0.268372 12.2242 0.19219 12.3462 0.139781C12.4682 0.0873716 12.5995 0.0597853 12.7322 0.0586315C12.865 0.0574777 12.9967 0.0827794 13.1196 0.13306C13.2425 0.183341 13.3541 0.257594 13.448 0.351487C13.5419 0.44538 13.6162 0.557032 13.6665 0.679928C13.7167 0.802824 13.742 0.934504 13.7409 1.06728C13.7397 1.20006 13.7121 1.33128 13.6597 1.45329C13.6073 1.57529 13.5311 1.68564 13.4356 1.77788L7.77863 7.43488C7.5911 7.62235 7.3368 7.72767 7.07163 7.72767C6.80647 7.72767 6.55216 7.62235 6.36463 7.43488L0.707632 1.77788C0.612122 1.68564 0.53594 1.57529 0.483531 1.45329C0.431122 1.33128 0.403535 1.20006 0.402382 1.06728C0.401228 0.934504 0.426529 0.802824 0.47681 0.679928C0.527091 0.557032 0.601344 0.44538 0.695237 0.351487C0.78913 0.257594 0.900782 0.183341 1.02368 0.13306C1.14657 0.0827794 1.27825 0.0574777 1.41103 0.0586315C1.54381 0.0597853 1.67503 0.0873716 1.79704 0.139781C1.91904 0.19219 2.02939 0.268372 2.12163 0.363882L7.07163 5.31388Z" fill="#626262"/></svg></span>
            </button>
            <button @click="storeBtn()" class="flex justify-between items-center">
                <span class="mr-3">Stores</span>
                <span><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07163 5.31388L12.0216 0.363882C12.1139 0.268372 12.2242 0.19219 12.3462 0.139781C12.4682 0.0873716 12.5995 0.0597853 12.7322 0.0586315C12.865 0.0574777 12.9967 0.0827794 13.1196 0.13306C13.2425 0.183341 13.3541 0.257594 13.448 0.351487C13.5419 0.44538 13.6162 0.557032 13.6665 0.679928C13.7167 0.802824 13.742 0.934504 13.7409 1.06728C13.7397 1.20006 13.7121 1.33128 13.6597 1.45329C13.6073 1.57529 13.5311 1.68564 13.4356 1.77788L7.77863 7.43488C7.5911 7.62235 7.3368 7.72767 7.07163 7.72767C6.80647 7.72767 6.55216 7.62235 6.36463 7.43488L0.707632 1.77788C0.612122 1.68564 0.53594 1.57529 0.483531 1.45329C0.431122 1.33128 0.403535 1.20006 0.402382 1.06728C0.401228 0.934504 0.426529 0.802824 0.47681 0.679928C0.527091 0.557032 0.601344 0.44538 0.695237 0.351487C0.78913 0.257594 0.900782 0.183341 1.02368 0.13306C1.14657 0.0827794 1.27825 0.0574777 1.41103 0.0586315C1.54381 0.0597853 1.67503 0.0873716 1.79704 0.139781C1.91904 0.19219 2.02939 0.268372 2.12163 0.363882L7.07163 5.31388Z" fill="#626262"/></svg></span>
            </button>
            <!-- <button class="flex justify-between items-center">
                <span class="mr-3">Brands</span>
                <span><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07163 5.31388L12.0216 0.363882C12.1139 0.268372 12.2242 0.19219 12.3462 0.139781C12.4682 0.0873716 12.5995 0.0597853 12.7322 0.0586315C12.865 0.0574777 12.9967 0.0827794 13.1196 0.13306C13.2425 0.183341 13.3541 0.257594 13.448 0.351487C13.5419 0.44538 13.6162 0.557032 13.6665 0.679928C13.7167 0.802824 13.742 0.934504 13.7409 1.06728C13.7397 1.20006 13.7121 1.33128 13.6597 1.45329C13.6073 1.57529 13.5311 1.68564 13.4356 1.77788L7.77863 7.43488C7.5911 7.62235 7.3368 7.72767 7.07163 7.72767C6.80647 7.72767 6.55216 7.62235 6.36463 7.43488L0.707632 1.77788C0.612122 1.68564 0.53594 1.57529 0.483531 1.45329C0.431122 1.33128 0.403535 1.20006 0.402382 1.06728C0.401228 0.934504 0.426529 0.802824 0.47681 0.679928C0.527091 0.557032 0.601344 0.44538 0.695237 0.351487C0.78913 0.257594 0.900782 0.183341 1.02368 0.13306C1.14657 0.0827794 1.27825 0.0574777 1.41103 0.0586315C1.54381 0.0597853 1.67503 0.0873716 1.79704 0.139781C1.91904 0.19219 2.02939 0.268372 2.12163 0.363882L7.07163 5.31388Z" fill="#626262"/></svg></span>
            </button>
            <button class="flex justify-between items-center">
                <span class="mr-3">Price</span>
                <span><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07163 5.31388L12.0216 0.363882C12.1139 0.268372 12.2242 0.19219 12.3462 0.139781C12.4682 0.0873716 12.5995 0.0597853 12.7322 0.0586315C12.865 0.0574777 12.9967 0.0827794 13.1196 0.13306C13.2425 0.183341 13.3541 0.257594 13.448 0.351487C13.5419 0.44538 13.6162 0.557032 13.6665 0.679928C13.7167 0.802824 13.742 0.934504 13.7409 1.06728C13.7397 1.20006 13.7121 1.33128 13.6597 1.45329C13.6073 1.57529 13.5311 1.68564 13.4356 1.77788L7.77863 7.43488C7.5911 7.62235 7.3368 7.72767 7.07163 7.72767C6.80647 7.72767 6.55216 7.62235 6.36463 7.43488L0.707632 1.77788C0.612122 1.68564 0.53594 1.57529 0.483531 1.45329C0.431122 1.33128 0.403535 1.20006 0.402382 1.06728C0.401228 0.934504 0.426529 0.802824 0.47681 0.679928C0.527091 0.557032 0.601344 0.44538 0.695237 0.351487C0.78913 0.257594 0.900782 0.183341 1.02368 0.13306C1.14657 0.0827794 1.27825 0.0574777 1.41103 0.0586315C1.54381 0.0597853 1.67503 0.0873716 1.79704 0.139781C1.91904 0.19219 2.02939 0.268372 2.12163 0.363882L7.07163 5.31388Z" fill="#626262"/></svg></span>
            </button> -->
        </div>
        <div class="flex justify-end">
            <button @click="sortBtn()" class="flex justify-between items-center border w-1/2" style="background-color:#ffffff;">
                <span class="mr-3">Sort by | Lastest Product</span>
                <span><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07163 5.31388L12.0216 0.363882C12.1139 0.268372 12.2242 0.19219 12.3462 0.139781C12.4682 0.0873716 12.5995 0.0597853 12.7322 0.0586315C12.865 0.0574777 12.9967 0.0827794 13.1196 0.13306C13.2425 0.183341 13.3541 0.257594 13.448 0.351487C13.5419 0.44538 13.6162 0.557032 13.6665 0.679928C13.7167 0.802824 13.742 0.934504 13.7409 1.06728C13.7397 1.20006 13.7121 1.33128 13.6597 1.45329C13.6073 1.57529 13.5311 1.68564 13.4356 1.77788L7.77863 7.43488C7.5911 7.62235 7.3368 7.72767 7.07163 7.72767C6.80647 7.72767 6.55216 7.62235 6.36463 7.43488L0.707632 1.77788C0.612122 1.68564 0.53594 1.57529 0.483531 1.45329C0.431122 1.33128 0.403535 1.20006 0.402382 1.06728C0.401228 0.934504 0.426529 0.802824 0.47681 0.679928C0.527091 0.557032 0.601344 0.44538 0.695237 0.351487C0.78913 0.257594 0.900782 0.183341 1.02368 0.13306C1.14657 0.0827794 1.27825 0.0574777 1.41103 0.0586315C1.54381 0.0597853 1.67503 0.0873716 1.79704 0.139781C1.91904 0.19219 2.02939 0.268372 2.12163 0.363882L7.07163 5.31388Z" fill="#626262"/></svg></span>
            </button>
        </div>
        <!-- Category Catalog  -->
        <div v-show="displayCategory" id="cate-btn" class="text-black top-20 bg-white shadow-md w-1/6">
            <ul>
                <div :key="category.id" v-for="category in categories" class="flex justify-between border-b p-4 items-center">
                    <a :href="`/category/${category.slug}`" class="flex justify-between w-full items-center">
                        <span><img style="width:35px;" :src="`https://dashboard.kahioja.com/assets/images/categories/${category.photo}`" :alt="category.name"></span>
                        <span><li class="text-sm">{{ category.name }}</li></span>
                    </a>
                </div>
            </ul>
        </div>
        <!-- Store Catalog  -->
        <div v-show="displayStore" id="store-btn" class="text-black top-20 bg-white shadow-md w-1/6">
            <ul>
                <div :key="store.id" v-for="store in stores" class="flex justify-between border-b p-4 items-center">
                    <a :href="`/store/${store.shop_name}`">
                        <span><li class="text-sm py-1">{{ store.shop_name }}</li></span>
                    </a>
                </div>
            </ul>
        </div>
        <!-- Sort Product  -->
        <div v-show="displaySortProduct" id="sort-btn" class="text-black top-20 bg-white shadow-md w-1/6">
            <ul>
                <div @click="lastestProduct()" class="p-4 flex justify-between border-b items-center">
                    <span><li class="text-sm">Lastest Products</li></span>
                </div>
                <div @click="oldestProduct()" class="p-4 flex justify-between border-b items-center">
                    <span><li class="text-sm">Oldest Product</li></span>
                </div>
                <div @click="lowestProduct()" class="p-4 flex justify-between border-b items-center">
                    <span><li class="text-sm">Lowest Price</li></span>
                </div>
                <div @click="highestProduct()" class="p-4 flex justify-between border-b items-center">
                    <span><li class="text-sm">Highest Price</li></span>
                </div>
            </ul>
        </div>

    </div>
</template>

<script>
export default {
    name: 'CategoryComponent',
    data(){
        return{
            displayCategory: false,
            displayStore: false,
            displaySortProduct: false,
            categories: [],
            stores: []
        }
    },
    methods:{
        categoryBtn(){
            this.displayStore = false
            this.displaySortProduct = false
            this.displayCategory = !this.displayCategory
        },
        storeBtn(){
            this.displayCategory = false
            this.displaySortProduct = false
            this.displayStore = !this.displayStore
        },
        sortBtn(){
            this.displayCategory = false
            this.displayStore = false
            this.displaySortProduct = !this.displaySortProduct
        },
        lastestProduct(){
            window.location = '/lastestproduct'
        },
        oldestProduct(){
            window.location = '/oldestproduct'
        },
        lowestProduct(){
            window.location = '/lowestproduct'
        },
        highestProduct(){
            window.location = '/highestproduct'
        }
    },
    mounted(){
        axios.get(`/allcategories/`).then(response => {
            this.categories = response.data
        }).catch(error => {
            console.log(error)
        })
        axios.get(`/allstores/`).then(response => {
            this.stores = response.data
            console.log(this.stores)
        }).catch(error => {
            console.log(error)
        })
    }
}
</script>