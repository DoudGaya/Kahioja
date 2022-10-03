@extends('layout.template')

@section('main')
    <!-- Banner -->
    <!--<div id="banner" class="slider relative top-36 lg:top-0 mt-64 lg:mt-6 hidden lg:block">-->
        <!--<div class="flex items-center">-->
            
            <!--<div class="slideshow-container">-->
            <!--    <div class="mySlides fade">-->
            <!--        <img src="{{ asset('images/banner-1.jpg') }}" style="width:100%">-->
            <!--    </div>-->
                
            <!--    <div class="mySlides fade">-->
            <!--        <img src="{{ asset('images/banner-2.jpg') }}" style="width:100%">-->
            <!--    </div>-->

            <!--    <div class="mySlides fade">-->
            <!--        <img src="{{ asset('images/banner-3.jpg') }}" style="width:100%">-->
            <!--    </div>-->
            <!--</div>-->
            <!-- <a class="next" onclick="plusSlides(1, 1)">
                <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
            </a> -->
    <!--    </div>-->
    <!--    <div class="flex flex-row justify-center items-center mt-8 mx-auto">    -->
    <!--        <span class="dot"></span> -->
    <!--        <span class="dot"></span> -->
    <!--        <span class="dot"></span> -->
    <!--    </div>-->
    <!--</div>-->
    <!-- Popular Category -->
    <div id="popular-cat" class="relative md:-mt-10 lg:mt-48 -mt-24 top-40 mb-20 lg:-top-20 lg:-mb-20 lg:px-14 px-1 py-5 text-center">
        <h1 class="headings-yus">
            Popular Categories
        </h1>
        <div class="flex overflow-x-scroll pb-4 hide-scroll-bar">
            <div class="flex flex-nowrap">
                @foreach($categories as $category)
                    <div class="inline px-3 lg:w-40 w-24 max-w-xs">
                        <a href="{{ route('front.category', $category->slug) }}">
                            <div class="lg:cate-yus rounded-none">
                                <img style="height:50px;" class="mx-auto rounded-full object-cover" src="https://dashboard.kahioja.com/assets/images/categories/{{$category->photo}}" alt="{{ $category->name }}">
                            </div>
                            <span class="popular-cate-title">{{ (strlen($category->name) <= 10) ? $category->name : substr($category->name, 0,16)."..." }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="relative lg:-top-16 lg:px-14 px-1 py-8">
        <!-- Perfumes  -->
        @if(count($perfumes) > 0)
        <div id="best-product" class="mt-5">
            <h1 class="headings-yus">Perfumes</h1>
            <div class="items-center flex">
                @if(count($perfumes) > 6)
                <div>
                    <a id="slideRightPerfumes">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                    </a>
                </div>  
                @endif
                    <div id="perfumes" class="flex overflow-x-scroll pb-4 hide-scroll-bar scroll-smooth">
                        <div class="flex flex-nowrap">
                            @foreach($perfumes as $prod)
                                <div class="inline lg:px-1 px-0 pr-2 md:w-64 w-48 max-w-xs">
                                    @include('includes.productComponent')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @if(count($perfumes) > 6)
                <div>
                    <a id="slideLeftPerfumes">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
        @if(count($fashion) > 0)
        <!-- Fashion & Accessories Product  -->
        <div id="best-product" class="mt-5">
            <h1 class="headings-yus">Fashion & Accessories</h1>
            <div class="items-center flex">
                @if(count($fashion) > 6)
                <div>
                    <a id="slideRightFash">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                    </a>
                </div>  
                @endif
                    <div id="fashion" class="flex overflow-x-scroll pb-4 hide-scroll-bar scroll-smooth">
                        <div class="flex flex-nowrap">
                            @foreach($fashion as $prod)
                                <div class="inline lg:px-1 px-0 pr-2 md:w-64 w-48 max-w-xs">
                                    @include('includes.productComponent')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @if(count($fashion) > 6)
                <div>
                    <a id="slideLeftFash">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
        <!-- Groceries  -->
        @if(count($groceries) > 0)
        <div id="best-product" class="-mt-8">
            <h1 class="headings-yus">Groceries</h1>
            <div class="items-center flex">
                @if(count($groceries) > 6)
                <div>
                    <a id="slideRightGroceries">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                    </a>
                </div>  
                @endif
                    <div id="groceries" class="flex overflow-x-scroll pb-4 hide-scroll-bar scroll-smooth">
                        <div class="flex flex-nowrap">
                            @foreach($groceries as $prod)
                                <div class="inline lg:px-1 px-0 pr-2 md:w-64 w-48 max-w-xs">
                                    @include('includes.productComponent')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @if(count($groceries) > 6)
                <div>
                    <a id="slideLeftGroceries">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
        @if(count($drinks) > 0)
        <!-- Drinks Product  -->
        <div id="best-product" class="lg:-mt-5 -mt-8">
            <h1 class="headings-yus">Drinks & Beverages</h1>
            <div class="items-center flex">
                @if(count($drinks) > 6)
                <div>
                    <a id="slideRightDrinks">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                    </a>
                </div>  
                @endif
                    <div id="drinks" class="flex overflow-x-scroll pb-4 hide-scroll-bar scroll-smooth">
                        <div class="flex flex-nowrap">
                            @foreach($drinks as $prod)
                                <div class="inline lg:px-1 px-0 pr-2 md:w-64 w-48 max-w-xs">
                                    @include('includes.productComponent')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @if(count($drinks) > 6)
                <div>
                    <a id="slideLeftDrinks">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
        @if(count($toiletries) > 0)
        <!-- Toiletries Product  -->
        <div id="best-product" class="-mt-8">
            <h1 class="headings-yus">Toiletries</h1>
            <div class="items-center flex">
                @if(count($toiletries) > 6)
                <div>
                    <a id="slideRightToiletries">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8025)"><path d="M0 10C32.5848 10 59 36.4152 59 69V71C59 103.585 32.5848 130 0 130V10Z" fill="white"/><path d="M25.414 68.6564L29.364 64.7064C29.5462 64.5178 29.647 64.2652 29.6447 64.003C29.6424 63.7408 29.5372 63.49 29.3518 63.3046C29.1664 63.1192 28.9156 63.014 28.6534 63.0118C28.3912 63.0095 28.1386 63.1103 27.95 63.2924L22.293 68.9494C22.1998 69.0421 22.1259 69.1522 22.0754 69.2736C22.0249 69.3949 21.999 69.525 21.999 69.6564C21.999 69.7878 22.0249 69.918 22.0754 70.0393C22.1259 70.1606 22.1998 70.2708 22.293 70.3634L27.95 76.0204C28.0422 76.1159 28.1526 76.1921 28.2746 76.2445C28.3966 76.2969 28.5278 76.3245 28.6606 76.3257C28.7934 76.3268 28.9251 76.3015 29.048 76.2513C29.1709 76.201 29.2825 76.1267 29.3764 76.0328C29.4703 75.9389 29.5445 75.8273 29.5948 75.7044C29.6451 75.5815 29.6704 75.4498 29.6693 75.317C29.6681 75.1842 29.6405 75.053 29.5881 74.931C29.5357 74.809 29.4595 74.6987 29.364 74.6064L25.414 70.6564H35C35.2652 70.6564 35.5196 70.5511 35.7071 70.3635C35.8946 70.176 36 69.9216 36 69.6564C36 69.3912 35.8946 69.1369 35.7071 68.9493C35.5196 68.7618 35.2652 68.6564 35 68.6564H25.414Z" fill="black"/></g><defs><filter id="filter0_d_398:8025" x="-10" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8025"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8025" result="shape"/></filter></defs></svg>
                    </a>
                </div>  
                @endif
                    <div id="toiletries" class="flex overflow-x-scroll pb-4 hide-scroll-bar scroll-smooth">
                        <div class="flex flex-nowrap">
                            @foreach($toiletries as $prod)
                                <div class="inline lg:px-1 px-0 pr-2 md:w-64 w-48 max-w-xs">
                                    @include('includes.productComponent')
                                </div>
                            @endforeach
                        </div>
                    </div>
                @if(count($toiletries) > 6)
                <div>
                    <a id="slideLeftToiletries">
                        <svg class="w-8 lg:w-12" viewBox="0 0 69 140" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d_398:8028)"><path d="M69 10C36.4152 10 10 36.4152 10 69V71C10 103.585 36.4152 130 69 130V10Z" fill="white"/><path d="M43.586 68.6564L39.636 64.7064C39.4538 64.5178 39.353 64.2652 39.3553 64.003C39.3576 63.7408 39.4628 63.49 39.6482 63.3046C39.8336 63.1192 40.0844 63.014 40.3466 63.0118C40.6088 63.0095 40.8614 63.1103 41.05 63.2924L46.707 68.9494C46.8002 69.0421 46.8741 69.1522 46.9246 69.2736C46.9751 69.3949 47.001 69.525 47.001 69.6564C47.001 69.7878 46.9751 69.918 46.9246 70.0393C46.8741 70.1606 46.8002 70.2708 46.707 70.3634L41.05 76.0204C40.9578 76.1159 40.8474 76.1921 40.7254 76.2445C40.6034 76.2969 40.4722 76.3245 40.3394 76.3257C40.2066 76.3268 40.0749 76.3015 39.952 76.2513C39.8291 76.201 39.7175 76.1267 39.6236 76.0328C39.5297 75.9389 39.4555 75.8273 39.4052 75.7044C39.3549 75.5815 39.3296 75.4498 39.3307 75.317C39.3319 75.1842 39.3595 75.053 39.4119 74.931C39.4643 74.809 39.5405 74.6987 39.636 74.6064L43.586 70.6564H34C33.7348 70.6564 33.4804 70.5511 33.2929 70.3635C33.1054 70.176 33 69.9216 33 69.6564C33 69.3912 33.1054 69.1369 33.2929 68.9493C33.4804 68.7618 33.7348 68.6564 34 68.6564H43.586Z" fill="black"/></g><defs><filter id="filter0_d_398:8028" x="0" y="0" width="79" height="140" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset/><feGaussianBlur stdDeviation="5"/><feComposite in2="hardAlpha" operator="out"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_398:8028"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_398:8028" result="shape"/></filter></defs></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endif
        <!-- Infinite Scroll -->
        <div class="-mt-8">
            <div id="post-data">
                @include('includes.data')
            </div>
        </div>
        <div class="ajax-load text-center" style="display:none">
            <p><div class="mx-auto"></div></p>
        </div>
        <!-- Trust  -->
        <div class="mb-12 lg:mb-0">
            <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-3">
                <div class="flex justify-center items-center">
                    <svg width="90" height="90" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M74.7815 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V63.1025" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 36.4865H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 51.1534H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M102.869 75.1246L102.107 74.6867L101.344 75.1246C98.6841 76.6529 95.727 77.5931 92.6726 77.8819C89.6181 78.1707 86.5372 77.8014 83.6375 76.7989V94.7634C83.6375 97.0465 84.0872 99.3071 84.9609 101.416C85.8346 103.526 87.1152 105.442 88.7295 107.056L98.1021 116.429C98.628 116.955 99.2522 117.372 99.9393 117.657C100.626 117.942 101.363 118.088 102.106 118.088V118.088C102.85 118.088 103.587 117.942 104.274 117.657C104.961 117.372 105.585 116.955 106.111 116.429L115.483 107.057C118.744 103.796 120.575 99.3743 120.575 94.7634V76.7991C117.676 77.8016 114.595 78.1709 111.54 77.882C108.486 77.5932 105.529 76.6529 102.869 75.1246V75.1246Z" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">100%</span> <br>
                        <span class="trust-label">
                            Secured <br>
                            Payment
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg width="90" height="90" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.5012 93.8388V38.4763C35.5012 31.8021 38.1525 25.4013 42.8718 20.682C47.5912 15.9626 53.992 13.3113 60.6661 13.3113H71.1514C77.8256 13.3113 84.2264 15.9626 88.9457 20.682C93.6651 25.4013 96.3163 31.8021 96.3163 38.4763V90.9268C96.3163 97.0624 93.879 102.947 89.5405 107.285C85.2019 111.624 79.3176 114.061 73.182 114.061V114.061" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M35.5012 49.3815H32.3556C27.4056 49.3815 22.6584 51.3479 19.1582 54.848C15.6581 58.3482 13.6917 63.0954 13.6917 68.0454V75.1754C13.6917 80.1253 15.6581 84.8726 19.1582 88.3727C22.6584 91.8729 27.4056 93.8393 32.3556 93.8393H35.5012" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M96.317 49.3815H99.4626C104.413 49.3815 109.16 51.3479 112.66 54.848C116.16 58.3482 118.126 63.0954 118.126 68.0454V75.1754C118.126 80.1253 116.16 84.8726 112.66 88.3727C109.16 91.8729 104.413 93.8393 99.4626 93.8393H96.317" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M24.5972 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M107.221 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M35.5012 47.5466C35.5012 40.8724 38.1525 34.4716 42.8718 29.7523C47.5912 25.0329 53.992 22.3817 60.6661 22.3817H71.1514C77.8256 22.3817 84.2264 25.0329 88.9457 29.7523C93.6651 34.4716 96.3163 40.8724 96.3163 47.5466" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M68.645 109.616H49.8394C47.3847 109.616 45.3948 111.606 45.3948 114.061C45.3948 116.516 47.3847 118.506 49.8394 118.506H68.645C71.0997 118.506 73.0896 116.516 73.0896 114.061C73.0896 111.606 71.0997 109.616 68.645 109.616Z" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Customer <br>
                            Service
                        </span>
                    </div>
                </div>
                <div class="flex items-center mx-auto lg:mx-0">
                    <svg width="90" height="90" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.5924 36.4855H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 51.1516H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M47.8248 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V69.621" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M70.4579 117.491C73.6144 117.491 76.1733 114.932 76.1733 111.776C76.1733 108.619 73.6144 106.06 70.4579 106.06C67.3013 106.06 64.7424 108.619 64.7424 111.776C64.7424 114.932 67.3013 117.491 70.4579 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M109.678 117.491C112.835 117.491 115.393 114.932 115.393 111.776C115.393 108.619 112.835 106.06 109.678 106.06C106.521 106.06 103.963 108.619 103.963 111.776C103.963 114.932 106.521 117.491 109.678 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M103.963 80.9965V94.3442C103.963 94.9066 104.186 95.446 104.584 95.8437C104.981 96.2415 105.521 96.4649 106.083 96.4649H119.979" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M64.7451 111.933H61.4719C61.3594 111.933 61.2515 111.889 61.1719 111.809C61.0923 111.73 61.0476 111.622 61.0476 111.509V81.4208C61.0476 81.3083 61.0923 81.2004 61.1719 81.1208C61.2515 81.0412 61.3594 80.9965 61.4719 80.9965H106.819C107.139 80.9965 107.454 81.0687 107.742 81.2077C108.03 81.3467 108.282 81.549 108.481 81.7993L119.654 95.886C119.952 96.261 120.114 96.7256 120.114 97.2042V111.509C120.114 111.565 120.103 111.62 120.081 111.672C120.06 111.723 120.029 111.77 119.989 111.809C119.95 111.849 119.903 111.88 119.852 111.901C119.8 111.923 119.745 111.934 119.689 111.934H115.395" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M103.964 111.934H76.1733" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Free <br>
                            Delivery
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg width="90" height="90" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M67.7395 27.8289C46.5058 27.8289 29.2925 45.0422 29.2925 66.2759C29.2925 76.9461 33.6392 86.601 40.6584 93.5667" stroke="black" stroke-width="5.06993" stroke-linecap="round"/><path d="M60.4166 43.9395L71.4015 27.4622L54.9242 16.4773" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/><path d="M62.9792 103.82C84.2129 103.82 101.426 86.6065 101.426 65.3728C101.426 54.7026 97.0795 45.0476 90.0603 38.082" stroke="black" stroke-width="5.06993" stroke-linecap="round"/><path d="M71.3997 87.8784L60.4149 104.356L76.8921 115.341" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">30 Days</span> <br>
                        <span class="trust-label">
                            Return <br>
                            Policy
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
	var page = 1;
	window.addEventListener('scroll',()=>{
        const {scrollHeight,scrollTop,clientHeight} = document.documentElement;
	    if(scrollTop + clientHeight > scrollHeight - 5){
	        page++;
	        loadMoreData(page);
	    }
	});


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == ""){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#post-data").append(data.html);
                console.log(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	            console.log('server not responding...');
	        });
	}
</script>