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
	    <link rel="icon"  type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}"/>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    </head>
    <body>
        <!-- Nav  -->
        <div id="navComponent">
            <nav-component></nav-component>
        </div>
        @if(!Auth::guard('web')->check())
            <script> window.authUser = null </script>    
        @else
            <script> window.authUser = {!! json_encode(Auth::user()); !!} </script>        
        @endif 

        @yield('main')
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
                            <li class="py-4">
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
                    <div class="flex mt-3">
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
