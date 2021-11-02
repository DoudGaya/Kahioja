<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if(isset($page->meta_tag) && isset($page->meta_description))
            <meta name="keywords" content="{{ $page->meta_tag }}">
            <meta name="description" content="{{ $page->meta_description }}">
            <title>{{$gs->title}}</title>
        @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
            <meta name="keywords" content="{{ $blog->meta_tag }}">
            <meta name="description" content="{{ $blog->meta_description }}">
            <title>{{$gs->title}}</title>
        @elseif(isset($productt))
            <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
            <meta name="description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
            <meta property="og:title" content="{{$productt->name}}" />
            <meta property="og:description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}" />
            <meta property="og:image" content="{{asset('assets/images/thumbnails/'.$productt->thumbnail)}}" />
            <meta name="author" content="Kahioja Store">
            <title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>
        @else
            <meta name="keywords" content="Kahioja">
            <meta name="author" content="Kahioja Store">
            <title>{{$gs->title}}</title>
        @endif
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Nav  -->
        <div class="app">
            <nav-component></nav-component>
        </div>
        @yield('main')
        <!-- Trust  -->
        <div class="mt-16 px-14">
            <div class="grid grid-cols-4 gap-6">
                <div class="flex justify-center items-center">
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M74.7815 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V63.1025" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 36.4865H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 51.1534H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M102.869 75.1246L102.107 74.6867L101.344 75.1246C98.6841 76.6529 95.727 77.5931 92.6726 77.8819C89.6181 78.1707 86.5372 77.8014 83.6375 76.7989V94.7634C83.6375 97.0465 84.0872 99.3071 84.9609 101.416C85.8346 103.526 87.1152 105.442 88.7295 107.056L98.1021 116.429C98.628 116.955 99.2522 117.372 99.9393 117.657C100.626 117.942 101.363 118.088 102.106 118.088V118.088C102.85 118.088 103.587 117.942 104.274 117.657C104.961 117.372 105.585 116.955 106.111 116.429L115.483 107.057C118.744 103.796 120.575 99.3743 120.575 94.7634V76.7991C117.676 77.8016 114.595 78.1709 111.54 77.882C108.486 77.5932 105.529 76.6529 102.869 75.1246V75.1246Z" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">100%</span> <br>
                        <span class="trust-label">
                            Secured <br>
                            Payment
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.5012 93.8388V38.4763C35.5012 31.8021 38.1525 25.4013 42.8718 20.682C47.5912 15.9626 53.992 13.3113 60.6661 13.3113H71.1514C77.8256 13.3113 84.2264 15.9626 88.9457 20.682C93.6651 25.4013 96.3163 31.8021 96.3163 38.4763V90.9268C96.3163 97.0624 93.879 102.947 89.5405 107.285C85.2019 111.624 79.3176 114.061 73.182 114.061V114.061" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M35.5012 49.3815H32.3556C27.4056 49.3815 22.6584 51.3479 19.1582 54.848C15.6581 58.3482 13.6917 63.0954 13.6917 68.0454V75.1754C13.6917 80.1253 15.6581 84.8726 19.1582 88.3727C22.6584 91.8729 27.4056 93.8393 32.3556 93.8393H35.5012" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M96.317 49.3815H99.4626C104.413 49.3815 109.16 51.3479 112.66 54.848C116.16 58.3482 118.126 63.0954 118.126 68.0454V75.1754C118.126 80.1253 116.16 84.8726 112.66 88.3727C109.16 91.8729 104.413 93.8393 99.4626 93.8393H96.317" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M24.5972 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M107.221 62.6457V80.5756" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M35.5012 47.5466C35.5012 40.8724 38.1525 34.4716 42.8718 29.7523C47.5912 25.0329 53.992 22.3817 60.6661 22.3817H71.1514C77.8256 22.3817 84.2264 25.0329 88.9457 29.7523C93.6651 34.4716 96.3163 40.8724 96.3163 47.5466" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M68.645 109.616H49.8394C47.3847 109.616 45.3948 111.606 45.3948 114.061C45.3948 116.516 47.3847 118.506 49.8394 118.506H68.645C71.0997 118.506 73.0896 116.516 73.0896 114.061C73.0896 111.606 71.0997 109.616 68.645 109.616Z" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Customer <br>
                            Service
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.5924 36.4855H68.8515" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M32.5924 51.1516H53.7775" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M47.8248 111.222H20.4176C19.3726 111.222 18.3703 110.806 17.6314 110.068C16.8924 109.329 16.4773 108.326 16.4773 107.281V24.537C16.4773 23.4919 16.8924 22.4897 17.6314 21.7507C18.3703 21.0118 19.3726 20.5966 20.4176 20.5966H111.401C112.446 20.5966 113.448 21.0118 114.187 21.7507C114.926 22.4897 115.341 23.4919 115.341 24.537V69.621" stroke="black" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M70.4579 117.491C73.6144 117.491 76.1733 114.932 76.1733 111.776C76.1733 108.619 73.6144 106.06 70.4579 106.06C67.3013 106.06 64.7424 108.619 64.7424 111.776C64.7424 114.932 67.3013 117.491 70.4579 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M109.678 117.491C112.835 117.491 115.393 114.932 115.393 111.776C115.393 108.619 112.835 106.06 109.678 106.06C106.521 106.06 103.963 108.619 103.963 111.776C103.963 114.932 106.521 117.491 109.678 117.491Z" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M103.963 80.9965V94.3442C103.963 94.9066 104.186 95.446 104.584 95.8437C104.981 96.2415 105.521 96.4649 106.083 96.4649H119.979" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M64.7451 111.933H61.4719C61.3594 111.933 61.2515 111.889 61.1719 111.809C61.0923 111.73 61.0476 111.622 61.0476 111.509V81.4208C61.0476 81.3083 61.0923 81.2004 61.1719 81.1208C61.2515 81.0412 61.3594 80.9965 61.4719 80.9965H106.819C107.139 80.9965 107.454 81.0687 107.742 81.2077C108.03 81.3467 108.282 81.549 108.481 81.7993L119.654 95.886C119.952 96.261 120.114 96.7256 120.114 97.2042V111.509C120.114 111.565 120.103 111.62 120.081 111.672C120.06 111.723 120.029 111.77 119.989 111.809C119.95 111.849 119.903 111.88 119.852 111.901C119.8 111.923 119.745 111.934 119.689 111.934H115.395" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/><path d="M103.964 111.934H76.1733" stroke="#F37022" stroke-width="5.06993" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    <div class="ml-3">
                        <span class="trust-title">24/7</span> <br>
                        <span class="trust-label">
                            Free <br>
                            Delivery
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M67.7395 27.8289C46.5058 27.8289 29.2925 45.0422 29.2925 66.2759C29.2925 76.9461 33.6392 86.601 40.6584 93.5667" stroke="black" stroke-width="5.06993" stroke-linecap="round"/><path d="M60.4166 43.9395L71.4015 27.4622L54.9242 16.4773" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/><path d="M62.9792 103.82C84.2129 103.82 101.426 86.6065 101.426 65.3728C101.426 54.7026 97.0795 45.0476 90.0603 38.082" stroke="black" stroke-width="5.06993" stroke-linecap="round"/><path d="M71.3997 87.8784L60.4149 104.356L76.8921 115.341" stroke="#F37022" stroke-width="5.06993" stroke-linecap="round"/></svg>
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
        <!-- Footer  -->
        <div id="footer" class="mt-16 py-8">
            <div class="grid grid-cols-4 gap-6 px-14">
                <div class="col-span-3">
                    <div>
                        <img class="py-4" src="{{ asset('images/logo-2.png') }}" alt="Kahioja Logo">
                    </div>
                    <div class="w-1/2 my-8">
                        <p>
                            Kahioja is an ecommerce platform that serve local market across Africa. We aim to give access to myriad of products on our platform and help businesses grow whilst making sales and delivery as ease. 
                        </p>
                    </div>
                    <div>
                        <p>
                            Copyright &copy; 2021. All Rights Reserved By Kahioja
                        </p>
                    </div>
                </div>
                <div class="col-span-1">
                    <h1>Useful Links</h1>
                    <div class="mt-3">
                        <ul id="footer-nav">
                            <li class="py-2">
                                <a href="#">All Categories</a>
                            </li>
                            <li class="py-2">
                               <a href="">Track Orders</a>
                            </li>
                            <li class="py-2">
                                <a href="">Privacy &amp; Security</a>
                            </li>
                            <li class="py-2">
                               <a href="">Terms &amp; Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex mt-2">
                        <img class="" src="{{ asset('images/instagram.png') }}" alt="Instagram Logo">
                        <img class="ml-3" src="{{ asset('images/facebook.png') }}" alt="Facebook Logo">
                        <img class="ml-3" src="{{ asset('images/twitter.png') }}" alt="Twitter Logo">
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
