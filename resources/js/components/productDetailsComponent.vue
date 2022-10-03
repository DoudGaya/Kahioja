<template>
    <div v-show="displayProductDetails" id="product-details" class="lg:grid grid-cols-1 lg:grid-cols-5 gap-6 lg:my-12 my-4">
        <!-- Product Gallery  -->
        <div class="flex flex-row col-span-1 my-auto items-center">
            <div>
                <a id="slideRightGallery">
                    <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                </a>
            </div>
            <div id="gallery" class="flex overflow-x-scroll lg:pb-10 pb-4 hide-scroll-bar">
                <div class="flex flex-nowrap">
                    <div class="inline-block px-1">
                        <div class="lg:w-48 lg:h-48 w-24 h-24 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <img class="object-cover product-gallery product-active" :src="`https://dashboard.kahioja.com/assets/images/products/${productimage}`" :alt="`${ productname }`">
                        </div>
                    </div>
                    <div :key="productphoto" v-for="productphoto in productgallery"> 
                        <div class="inline-block px-1">
                            <div class="lg:w-48 lg:h-48 w-24 h-24 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                <img class="mx-auto product-gallery product-active" :src="`https://dashboard.kahioja.com/assets/images/galleries/${productphoto.photo}`" :alt="`${ productname }`">
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div>
                <a id="slideLeftGallery">
                    <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                </a>
            </div>
        </div>
        <!-- Product Image  -->
        <div class="md:col-span-2 w-full border rounded-xl shadow">
            <img id="featured-product" class="w-3/5 mx-auto py-6 my-auto" :src="`https://dashboard.kahioja.com/assets/images/products/${productimage}`" :alt="productname">
        </div>
        <!-- Product Details  -->
        <div class="rounded-xl px-10 py-8 border md:col-span-2 shadow">
            <div class="py-3">
                <div v-if="isLoading" class="loader mx-auto mt-5"></div>
                <h1 class="product-details-title">{{ productname }}</h1>
                <div class="flex items-center">
                    <span class="product-curr-price"><b>₦{{ parseFloat(productcurrprice).toLocaleString() }}</b></span>
                    <span v-if="productpreprive != null" class="card-prev-price"><b>₦{{ parseInt(productprevprice).toLocaleString() }}</b></span>
                </div>
                <div v-if="(productstock > 0) || (productstock == null)" class="flex items-center mb-4">
                    <h1 class="product-details-title"> </h1>
                </div>
                <div v-else class="mb-4">
                    <h1 class="text-red-700">Out of Stock</h1>
                </div>
                <div class="product-details-content">
                    <p>
                        Product ID: {{ productsku }}
                    </p>
                </div>
                <div class="product-details-content grid grid-cols-2 gap-6 card-reviews my-4">
                    <div class="flex items-center w-full">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span v-if="(productdeliveryfee != 0)" class="ml-2">
                            ₦{{ parseFloat(productdeliveryfee).toLocaleString() }}
                        </span>
                        <span v-else class="ml-2">
                            Free Delivery
                        </span>
                    </div>
                    <div class="flex items-center w-full">
                        <span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9157 22.0795C20.4602 22.0795 22.5229 20.0168 22.5229 17.4724C22.5229 14.9279 20.4602 12.8652 17.9157 12.8652C15.3713 12.8652 13.3086 14.9279 13.3086 17.4724C13.3086 20.0168 15.3713 22.0795 17.9157 22.0795Z" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M17.918 14.3809V17.4716L20.0307 18.7586" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M11.7867 20.5781H3.99866C3.80839 20.5781 3.62592 20.5025 3.49138 20.368C3.35683 20.2335 3.28125 20.051 3.28125 19.8607V4.79554C3.28125 4.60527 3.35683 4.42279 3.49138 4.28825C3.62592 4.15371 3.80839 4.07812 3.99866 4.07812H20.5638C20.7541 4.07812 20.9366 4.15371 21.0711 4.28825C21.2057 4.42279 21.2813 4.60527 21.2813 4.79554V11.8171" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 6.9707H12.8165" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 9.64062H10.072" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span class="ml-1 text-left leading-5">
                            {{ deliveryTime }}
                        </span>
                        <!-- <span v-else-if="(deliverytime > 1)" class="ml-1">
                            {{ deliverytime }} Days
                        </span>
                        <span v-else class="ml-1">
                            1 Day
                        </span> -->
                    </div>
                </div>
                <div class="product-details-content flex items-center w-full my-5">
                    <a class="hover:underline" :href="`/store/${store}/`">
                        <span>
                            Visit Store: 
                        </span>
                        <span class="ml-2">
                            {{ store }}
                        </span>
                    </a>
                </div>
                <div id="cart-body-product-add" class="flex justify-between w-full md:w-1/4 py-2 px-4 rounded-full my-2">
                    <div class="cursor-pointer">
                        <button @click="minusProduct()"> - </button>
                    </div>
                    <input v-if="productquantityinbag != null" class="w-1/3 text-center bg-white" :value="productquantityinbag" disabled>
                    <input v-else class="w-1/3 text-center bg-white" :value="quantity" disabled>
                    <div class="cursor-pointer">
                        <button @click="addProduct()">+</button>
                    </div>
                </div>
                <div v-if="(productstock > 0) || (productstock == null)" class="lg:grid grid-cols-2 gap-6 my-7">
                    <div>
                        <button @click="addToBag()" class="mx-auto btn-yus rounded-full w-full flex flex-row justify-center items-center p-2 text-white">
                            <div class="card-bag-label">
                                Add to Bag 
                            </div>
                            <div class="md:ml-1">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 10C3.23478 10 2.98043 10.1054 2.79289 10.2929C2.60536 10.4804 2.5 10.7348 2.5 11V14C2.5 15.0609 2.92143 16.0783 3.67157 16.8284C4.42172 17.5786 5.43913 18 6.5 18H14.5C15.5609 18 16.5783 17.5786 17.3284 16.8284C18.0786 16.0783 18.5 15.0609 18.5 14V11C18.5 10.7348 18.3946 10.4804 18.2071 10.2929C18.0196 10.1054 17.7652 10 17.5 10H3.5ZM5.5 8V5C5.5 3.67392 6.02678 2.40215 6.96447 1.46447C7.90215 0.526784 9.17392 0 10.5 0C11.8261 0 13.0979 0.526784 14.0355 1.46447C14.9732 2.40215 15.5 3.67392 15.5 5V8H17.5C18.2956 8 19.0587 8.31607 19.6213 8.87868C20.1839 9.44129 20.5 10.2044 20.5 11V14C20.5 15.5913 19.8679 17.1174 18.7426 18.2426C17.6174 19.3679 16.0913 20 14.5 20H6.5C4.9087 20 3.38258 19.3679 2.25736 18.2426C1.13214 17.1174 0.5 15.5913 0.5 14L0.5 11C0.5 10.2044 0.81607 9.44129 1.37868 8.87868C1.94129 8.31607 2.70435 8 3.5 8H5.5ZM7.5 8H13.5V5C13.5 4.20435 13.1839 3.44129 12.6213 2.87868C12.0587 2.31607 11.2956 2 10.5 2C9.70435 2 8.94129 2.31607 8.37868 2.87868C7.81607 3.44129 7.5 4.20435 7.5 5V8Z" fill="white"/></svg>
                            </div> 
                        </button>
                    </div>
                    <br>
                    
                    <div>
                        <form v-if="(getUser != '')" action="/buynow" method="POST">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="product_id" :value="productid">
                            <input type="hidden" name="quantity" :value="quantity">
                            <button @click="buyNow()" style="background-color:#ff9400;" class="mx-auto btn-yus rounded-full w-full flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Buy Now 
                                </div>
                                <div class="ml-2">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 4V2H2V4H18ZM18 7H2V12H18V7ZM2 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V12C20 12.5304 19.7893 13.0391 19.4142 13.4142C19.0391 13.7893 18.5304 14 18 14H2C1.46957 14 0.960859 13.7893 0.585786 13.4142C0.210714 13.0391 0 12.5304 0 12V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0V0ZM4 9H5C5.26522 9 5.51957 9.10536 5.70711 9.29289C5.89464 9.48043 6 9.73478 6 10C6 10.2652 5.89464 10.5196 5.70711 10.7071C5.51957 10.8946 5.26522 11 5 11H4C3.73478 11 3.48043 10.8946 3.29289 10.7071C3.10536 10.5196 3 10.2652 3 10C3 9.73478 3.10536 9.48043 3.29289 9.29289C3.48043 9.10536 3.73478 9 4 9ZM9 9H14C14.2652 9 14.5196 9.10536 14.7071 9.29289C14.8946 9.48043 15 9.73478 15 10C15 10.2652 14.8946 10.5196 14.7071 10.7071C14.5196 10.8946 14.2652 11 14 11H9C8.73478 11 8.48043 10.8946 8.29289 10.7071C8.10536 10.5196 8 10.2652 8 10C8 9.73478 8.10536 9.48043 8.29289 9.29289C8.48043 9.10536 8.73478 9 9 9Z" fill="white"/></svg>
                                </div> 
                            </button>
                        </form>
                        <div v-else>
                            <button @click="buyNowGuest()" style="background-color:#ff9400;" class="mx-auto btn-yus rounded-full w-full flex flex-row justify-center items-center py-2 text-white">
                                <div class="card-bag-label">
                                    Buy Now 
                                </div>
                                <div class="ml-2">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 4V2H2V4H18ZM18 7H2V12H18V7ZM2 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V12C20 12.5304 19.7893 13.0391 19.4142 13.4142C19.0391 13.7893 18.5304 14 18 14H2C1.46957 14 0.960859 13.7893 0.585786 13.4142C0.210714 13.0391 0 12.5304 0 12V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0V0ZM4 9H5C5.26522 9 5.51957 9.10536 5.70711 9.29289C5.89464 9.48043 6 9.73478 6 10C6 10.2652 5.89464 10.5196 5.70711 10.7071C5.51957 10.8946 5.26522 11 5 11H4C3.73478 11 3.48043 10.8946 3.29289 10.7071C3.10536 10.5196 3 10.2652 3 10C3 9.73478 3.10536 9.48043 3.29289 9.29289C3.48043 9.10536 3.73478 9 4 9ZM9 9H14C14.2652 9 14.5196 9.10536 14.7071 9.29289C14.8946 9.48043 15 9.73478 15 10C15 10.2652 14.8946 10.5196 14.7071 10.7071C14.5196 10.8946 14.2652 11 14 11H9C8.73478 11 8.48043 10.8946 8.29289 10.7071C8.10536 10.5196 8 10.2652 8 10C8 9.73478 8.10536 9.48043 8.29289 9.29289C8.48043 9.10536 8.73478 9 9 9Z" fill="white"/></svg>
                                </div> 
                            </button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="flex flex-col product-details-content card-reviews my-4">
                    <div class="flex items-center w-full my-2">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span v-if="(productdeliveryfee != 0)" class="ml-2">
                            ₦{{ parseFloat(productdeliveryfee).toLocaleString() }}
                        </span>
                        <span v-else class="ml-2">
                            Free Delivery
                        </span>
                    </div>
                    <div class="flex items-center w-full my-2">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span class="ml-2">
                            30 Days Return Policy
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div v-show="displaySignUpForm" id="cart" class="shadow">
        <div id="cart-content">
            <div id="cart-header" class="p-4 flex justify-between">
                <span>Create Account</span>
                <span @click="closeCart()" class="cursor-pointer">
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
                        <form action="/login/buynow" method="POST">
                            <div class="my-4">
                                <input type="hidden" name="_token" :value="csrf">
                                <input type="hidden" name="product_id" :value="productid">
                                <input type="hidden" name="quantity" :value="quantity">
                                
                                <div>
                                    <input required v-model="loginEmail" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="email" name="email" id="loginEmail" placeholder="Email Address">
                                </div>
                                <div>
                                    <input required v-model="loginPassword" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="password" name="password" id="loginPassword" placeholder="Password">
                                </div>
                            </div>
                            <div @click="showForgotPasswordForm()" class="cursor-pointer flex justify-end my-4">
                                Forgot Password?
                            </div>
                            <div class="text-left my-4 items-center">
                                <span>
                                    <input type="checkbox" name="signed">
                                </span>
                                <span>
                                    Keep me signed in
                                </span>
                            </div>
                            <div class="my-8">
                                <button type="submit" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                    Login
                                </button>
                            </div>
                        </form>
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
                        <form action="/register/verify/buynow" method="POST">
                            
                            <div class="my-8">
                                Enter your Verification Code sent to your Email
                            </div>
                            <div class="my-4">
                                <input type="hidden" name="_token" :value="csrf">
                                <input type="hidden" name="product_id" :value="productid">
                                <input type="hidden" name="quantity" :value="quantity">
                                <div>
                                    <input required v-model="verificationCode" class="border border-gray-300 rounded py-3 px-6 w-full my-2 focus:outline-none" type="text" name="verificationCode" id="verificationCode" placeholder="Enter your Verification Code">
                                </div>
                            </div>
                            <div c lass="my-8">
                                <button @click="verifyCode()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProductDetails',
    props:[
        'productid',
        'productimage',
        'productgallery',
        'productname',
        'productcurrprice',
        'productprevprice',
        'productsku',
        'productstock',
        'deliverytime',
        'productdeliveryfee',
        'store',
        'productquantityinbag'
    ],
    computed: {
        getUser(){
            return this.user = this.$store.getters.getUser
        },
    },
    data(){
        return{
            quantity: 1,
            isLoading: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            displayProductDetails: true,
            displayLoginForm: false,
            displaySignUpForm: false,
            displayForgotPasswordForm: false,
            signUpForm: false,
            verifyEmailForm: false,
            loginEmail: '',
            loginPassword: '',
            signUpName: '',
            signUpEmail: '',
            signUpPassword: '',
            forgotPasswordEmail: '',
            verification_code: '',
            callback: ''
        }
    },
    computed:{
        deliveryTime(){
            const today = new Date(Date.now() + (86400000 * this.deliverytime))
            return `Estimated Delivery Date: ${today.getDate()}/${today.getMonth() + 1}/${today.getFullYear()}`
        }
    },
    methods:{
        async minusProduct(){
            if(this.quantity > 1){
                this.isLoading = true
                this.quantity = this.quantity - 1
                this.isLoading = false
            } 
        },
        async addProduct(){
            if(this.quantity >= 1){
                this.isLoading = true
                this.quantity = this.quantity + 1
                this.isLoading = false
            }
        },
        async addToBag(){
            axios.post('/addtobag', {
                product_id: this.productid,
                quantity: this.quantity
            }).then(response => {
                this.$store.dispatch("allCartFromDatabase")
            }).catch(error => {
                console.log(error)
            })
        },
        showLoginForm(){
            this.displayLoginForm = true 
            this.signUpForm = false
            this.displayForgotPasswordForm = false 
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
        async loginUser(){
            
            document.getElementById('loginBtn').innerText = 'Authenticating...'
            // btnValue = 
            // this.isLoading = true 

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
                                window.location = '/'
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
        async buyNow(){
            axios.post('/buynow', {
                product_id: this.productid,
                quantity: this.quantity
            }).then(response => {
                this.$store.dispatch("allCartFromDatabase")
            }).catch(error => {
                console.log(error)
            })
        },
        async buyNowGuest(){
            this.displaySignUpForm = !this.displaySignUpForm
            this.signUpForm = !this.signUpForm
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
                axios.post('/register/verify/buynow', {
                    product_id: this.productid,
                    quantity: this.quantity,
                    verification_link: this.verificationCode,
                }).then(response => {
                    this.verificationCode = '',

                    this.isLoading = false
                    this.callback = response.data

                    if(this.callback == 'Your Email has been Verified Successfully'){
                        setTimeout(()=>{
                            window.location = '/buynow'
                        }, 3000)
                    }

                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.callback = 'Email Address field empty'
            }
        },
        closeCart(){
            this.displaySignUpForm = !this.displaySignUpForm 
        },
    }
}
</script>