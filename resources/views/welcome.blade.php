@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="mt-6">
        <div class="flex items-center">
            <!-- <img class="" src="{{ asset('images/right.png') }}" alt="Right Arrow"> -->
            <!-- Left Arrow  -->
            <svg width="69" height="140" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_398:8025)">
                <path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/>
                <path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/>
                </g>
                <defs>
                <filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/>
                </filter>
                </defs>
            </svg>
            <!-- Banner Image  -->
            <img style="width:90%;" class="mx-auto" src="{{ asset('images/banner.jpg') }}" alt="banner">
            <!-- Right Arrow  -->
            <!-- <img src="{{ asset('images/left.png') }}" alt="Left Arrow"> -->
            <svg width="69" height="140" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_398:8028)">
                <path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/>
                <path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/>
                </g>
                <defs>
                <filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/>
                </filter>
                </defs>
            </svg>
        </div>
        <div class="flex flex-row justify-center items-center mt-8 mx-auto">
            <!-- <img class="ml-3" src="{{ asset('images/dot-active.png') }}" alt="dot icon"> -->
            <!-- Active Slider  -->
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.7" cx="13.5" cy="13.5" r="13" stroke="#F37022"/>
                <circle cx="13.5" cy="13.5" r="5" fill="#F37022" stroke="#F37022"/>
            </svg>
            <!-- <img class="ml-3" src="{{ asset('images/dot.png') }}" alt="dot icon"> -->
            <!-- Sliders  -->
            <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
            </svg>
            <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
            </svg>
            <svg class="ml-3" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="5.5" cy="5.5" r="5.5" fill="#D8D8D8"/>
            </svg>
        </div>
    </div>
    <!-- Popular Category -->
    <div id="popular-cat" class="px-14 mt-8">
        <h1 class="headings-yus">
            Popular Product Categories
        </h1>
        <div class="grid grid-cols-6 gap-6 my-8 text-center">
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/games.png') }}" alt="Games Logo">
                </div>
                <span class="cate-title-yus">Games</span>
            </div>
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/smart-phones.png') }}" alt="Smart Phone Logo">
                </div>
                <span class="cate-title-yus">Smart Phone</span>
            </div>
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/groceries.png') }}" alt="Groceries Logo">
                </div>
                <span class="cate-title-yus">Groceries</span>
            </div>
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/electronics.png') }}" alt="Electronics Logo">
                </div>
                <span class="cate-title-yus">Electronics</span>
            </div>
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/smart-watches.png') }}" alt="Smart Watches Logo">
                </div>
                <span class="cate-title-yus">Smart Watches</span>
            </div>
            <div>
                <div class="cate-yus rounded-full">
                    <img class="mx-auto" src="{{ asset('images/categories/household.png') }}" alt="Household Logo">
                </div>
                <span class="cate-title-yus">Household</span>
            </div>
        </div>
    </div>
    <!-- Main Category -->
    <div id="main-cat" class="px-14 my-8 text-center">
        <div class="grid grid-cols-2 gap-6">
            <div class="">
                <div class="mb-4 rounded-lg bg-white">
                    <div class="cate-title-yus my-12 pt-12">Shop Home Appliances</div>
                    <div class="py-8">
                        <img class="mx-auto" src="{{ asset('images/categories/shop-home-appliciances.png') }}" alt="Shop Home Appliances Logo">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg">
                        <div class="cate-title-yus my-12">Phone Accessories</div>
                        <div class="py-6">
                            <img class="mx-auto" src="{{ asset('images/categories/phone-accessories.png') }}" alt="Phone Accessories Logo">
                        </div>
                    </div>
                    <div class="bg-white rounded-lg">
                        <div class="cate-title-yus my-12">Watches</div>
                        <div class="py-6">
                            <img class="mx-auto" src="{{ asset('images/categories/watches.png') }}" alt="Watches Logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded bg-white">
                <div class="mb-4 rounded-lg">
                    <div class="cate-title-yus my-12 pt-16">Shop Groceries</div>
                    <div class="py-12">
                        <img class="mx-auto" src="{{ asset('images/categories/shop-groceries.png') }}" alt="Shop Groceries Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Product  -->
    <div id="best-product" class="px-14 my-8">
        <h1 class="headings-yus">Best Products</h1>
        <div class="grid grid-cols-4 gap-6">
            @foreach($best_products as $prod)
                @include('includes.productComponent')
            @endforeach
        </div>
    </div>
    <!-- Top Rated -->
    <div id="top-product" class="px-14 mt-20 mb-8">
        <h1 class="headings-yus">Top Rated</h1>
        <div class="grid grid-cols-4 gap-6">
            @foreach($top_products as $prod)
                @include('includes.productComponent')
            @endforeach
        </div>
    </div>
    <!-- Banner 2 -->
    <div id="banner2" class="mt-16">
        <div class="flex items-center">
            <img class="mx-auto" src="{{ asset('images/banner-2.png') }}" alt="banner 2">
        </div>
    </div>
    <!-- Hot Products -->
    <div id="hot-product" class="px-14 mt-20 mb-8">
        <h1 class="headings-yus">Hot Products</h1>
        <div class="grid grid-cols-4 gap-6">
            @foreach($hot_products as $prod)
                @include('includes.productComponent')
            @endforeach
        </div>
    </div>
    <!-- Banner 3 -->
    <div id="banner3" class="mt-16">
        <div class="flex items-center">
            <img class="mx-auto" src="{{ asset('images/banner-3.png') }}" alt="banner 3">
        </div>
    </div>
    <!-- Sale Products -->
    <div id="hot-product" class="px-14 mt-20 mb-8">
        <h1 class="headings-yus">Sale Products</h1>
        <div class="grid grid-cols-4 gap-6">
            @foreach($sale_products as $prod)
                @include('includes.productComponent')
            @endforeach
        </div>
    </div>
    <!-- More items -->
    <div class="mt-16 mb-8 flex justify-center">
        <button class="mx-auto btn-yus-conti-shopping rounded-full w-1/6 text-lg py-2 text-white">Shop all Items</button>
    </div>
@endsection