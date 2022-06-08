<template>
    <div id="product-details" class="grid grid-cols-1 lg:grid-cols-5 gap-6 my-12">
        <div id="slide-wrapper" class="hidden col-span-1 my-auto md:flex flex-col">
            <svg id="slideLeft" class="arrow" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15" transform="rotate(-90 16 16)" stroke="#222222" stroke-width="2"/><path d="M14.657 19.586L10.707 15.636C10.5184 15.4538 10.2658 15.353 10.0036 15.3553C9.7414 15.3576 9.49058 15.4628 9.30518 15.6482C9.11977 15.8336 9.0146 16.0844 9.01232 16.3466C9.01004 16.6088 9.11084 16.8614 9.293 17.05L14.95 22.707C15.0426 22.8002 15.1528 22.8741 15.2741 22.9246C15.3955 22.9751 15.5256 23.001 15.657 23.001C15.7884 23.001 15.9185 22.9751 16.0398 22.9246C16.1612 22.8741 16.2713 22.8002 16.364 22.707L22.021 17.05C22.1165 16.9578 22.1927 16.8474 22.2451 16.7254C22.2975 16.6034 22.3251 16.4722 22.3262 16.3394C22.3274 16.2066 22.3021 16.0749 22.2518 15.952C22.2015 15.8291 22.1273 15.7175 22.0334 15.6236C21.9395 15.5297 21.8278 15.4555 21.7049 15.4052C21.5821 15.3549 21.4504 15.3296 21.3176 15.3307C21.1848 15.3319 21.0536 15.3595 20.9316 15.4119C20.8096 15.4643 20.6992 15.5405 20.607 15.636L16.657 19.586V10C16.657 9.73478 16.5516 9.48043 16.3641 9.29289C16.1766 9.10536 15.9222 9 15.657 9C15.3918 9 15.1374 9.10536 14.9499 9.29289C14.7624 9.48043 14.657 9.73478 14.657 10V19.586V19.586Z" fill="#222222"/></svg>

            <div id="slider" class="hidden md:flex flex-col">
                <div class="w-full border rounded-xl shadow mb-2 px-10 py-8">
                    <img class="object-cover product-gallery product-active" :src="`https://dashboard.kahioja.com/assets/images/products/${productimage}`" :alt="`${ productname }`">
                </div>
                <div :key="productphoto" v-for="productphoto in productgallery">    
                    <div class="w-full border rounded-xl shadow mb-2 px-10 py-8">
                        <img class="object-cover product-gallery product-active" :src="`https://dashboard.kahioja.com/assets/images/galleries/${productphoto.photo}`" :alt="`${ productname }`">
                    </div>
                </div>
            </div>
            <!-- <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15" transform="rotate(-90 16 16)" stroke="#222222" stroke-width="2"/><path d="M14.657 19.586L10.707 15.636C10.5184 15.4538 10.2658 15.353 10.0036 15.3553C9.7414 15.3576 9.49058 15.4628 9.30518 15.6482C9.11977 15.8336 9.0146 16.0844 9.01232 16.3466C9.01004 16.6088 9.11084 16.8614 9.293 17.05L14.95 22.707C15.0426 22.8002 15.1528 22.8741 15.2741 22.9246C15.3955 22.9751 15.5256 23.001 15.657 23.001C15.7884 23.001 15.9185 22.9751 16.0398 22.9246C16.1612 22.8741 16.2713 22.8002 16.364 22.707L22.021 17.05C22.1165 16.9578 22.1927 16.8474 22.2451 16.7254C22.2975 16.6034 22.3251 16.4722 22.3262 16.3394C22.3274 16.2066 22.3021 16.0749 22.2518 15.952C22.2015 15.8291 22.1273 15.7175 22.0334 15.6236C21.9395 15.5297 21.8278 15.4555 21.7049 15.4052C21.5821 15.3549 21.4504 15.3296 21.3176 15.3307C21.1848 15.3319 21.0536 15.3595 20.9316 15.4119C20.8096 15.4643 20.6992 15.5405 20.607 15.636L16.657 19.586V10C16.657 9.73478 16.5516 9.48043 16.3641 9.29289C16.1766 9.10536 15.9222 9 15.657 9C15.3918 9 15.1374 9.10536 14.9499 9.29289C14.7624 9.48043 14.657 9.73478 14.657 10V19.586V19.586Z" fill="#222222"/></svg> -->
            <svg id="slideRight" class="arrow" width="32" height="32" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="15" transform="matrix(0 1 1 0 16 16.3263)" stroke="#222222" stroke-width="2"/><path d="M14.657 12.7403L10.707 16.6903C10.5184 16.8725 10.2658 16.9732 10.0036 16.971C9.74141 16.9687 9.4906 16.8635 9.30519 16.6781C9.11978 16.4927 9.01461 16.2419 9.01234 15.9797C9.01006 15.7175 9.11085 15.4649 9.29301 15.2763L14.95 9.61929C15.0427 9.52611 15.1528 9.45216 15.2742 9.4017C15.3955 9.35124 15.5256 9.32526 15.657 9.32526C15.7884 9.32526 15.9185 9.35124 16.0399 9.4017C16.1612 9.45216 16.2714 9.52611 16.364 9.61929L22.021 15.2763C22.1165 15.3685 22.1927 15.4789 22.2451 15.6009C22.2975 15.7229 22.3251 15.8541 22.3263 15.9869C22.3274 16.1197 22.3021 16.2514 22.2518 16.3742C22.2016 16.4971 22.1273 16.6088 22.0334 16.7027C21.9395 16.7966 21.8279 16.8708 21.705 16.9211C21.5821 16.9714 21.4504 16.9967 21.3176 16.9955C21.1848 16.9944 21.0536 16.9668 20.9316 16.9144C20.8096 16.862 20.6993 16.7858 20.607 16.6903L16.657 12.7403V22.3263C16.657 22.5915 16.5517 22.8459 16.3641 23.0334C16.1766 23.2209 15.9222 23.3263 15.657 23.3263C15.3918 23.3263 15.1374 23.2209 14.9499 23.0334C14.7624 22.8459 14.657 22.5915 14.657 22.3263V12.7403Z" fill="#222222"/></svg>
        </div>
        <!-- Product Image  -->
        <div class="md:col-span-2 w-full border rounded-xl shadow">
            <img id="featured-product" class="w-4/5 mx-auto py-6" :src="`https://dashboard.kahioja.com/assets/images/products/${productimage}`" :alt="productname">
        </div>
        <!-- Product Details  -->
        <div class="rounded-xl px-10 py-8 border md:col-span-2 shadow">
            <div class="py-3">
                <div v-if="isLoading" class="loader mx-auto mt-5"></div>
                <h1 class="product-details-title">{{ productname }}</h1>
                <div class="flex items-center">
                    <span class="product-curr-price"><b>{{ productcurrprice }}</b></span>
                    <span class="product-prev-price"><b>{{ productprevprice }}</b></span>
                </div>
                <div class="flex items-center mb-4">
                    <div class="flex mr-4">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.26444 0.25L6.35956 3.62042H9.90343L7.03638 5.70346L8.13149 9.07388L5.26444 6.99085L2.39739 9.07388L3.4925 5.70346L0.625452 3.62042H4.16932L5.26444 0.25Z" fill="#FFBD00"/></svg>
                    </div>
                    <div class="card-reviews">120 Reviews</div>
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
                        <span class="ml-1">
                            {{ productdeliveryfee }}
                        </span>
                    </div>
                    <div class="flex items-center w-full">
                        <span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9157 22.0795C20.4602 22.0795 22.5229 20.0168 22.5229 17.4724C22.5229 14.9279 20.4602 12.8652 17.9157 12.8652C15.3713 12.8652 13.3086 14.9279 13.3086 17.4724C13.3086 20.0168 15.3713 22.0795 17.9157 22.0795Z" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M17.918 14.3809V17.4716L20.0307 18.7586" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M11.7867 20.5781H3.99866C3.80839 20.5781 3.62592 20.5025 3.49138 20.368C3.35683 20.2335 3.28125 20.051 3.28125 19.8607V4.79554C3.28125 4.60527 3.35683 4.42279 3.49138 4.28825C3.62592 4.15371 3.80839 4.07812 3.99866 4.07812H20.5638C20.7541 4.07812 20.9366 4.15371 21.0711 4.28825C21.2057 4.42279 21.2813 4.60527 21.2813 4.79554V11.8171" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 6.9707H12.8165" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 9.64062H10.072" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span class="ml-1">
                            1 Day Delivery within Kano
                        </span>
                    </div>
                </div>
                <div id="cart-body-product-add" class="flex justify-between w-full md:w-1/4 py-2 px-4 rounded-full my-2">
                    <div class="cursor-pointer">
                        <button @click="minusProduct()"> - </button>
                    </div>
                    <input class="w-1/3 text-center bg-white" :value="quantity" disabled>
                    <div class="cursor-pointer">
                        <button @click="addProduct()">+</button>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 my-7">
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
                    <div>
                        <form action="/buynow" method="POST">
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
                    </div>
                </div>
                <hr>
                <div class="flex flex-col product-details-content card-reviews my-4">
                    <div class="flex items-center w-full my-2">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </span>
                        <span class="ml-2">
                            {{ productdeliveryfee }}
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
        'productdeliveryfee'
    ],
    data(){
        return{
            quantity: 1,
            isLoading: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
        async buyNow(){
            axios.post('/buynow', {
                product_id: this.productid,
                quantity: this.quantity
            }).then(response => {
                this.$store.dispatch("allCartFromDatabase")
            }).catch(error => {
                console.log(error)
            })
        }
    }
}
</script>