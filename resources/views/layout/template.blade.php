<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if(isset($productt))
            @include('meta::manager', [
                'title'         => substr($productt->name, 0,11)."-" .$gs->title,
                'description'   => $productt->details,
                'image'         => 'https://dashboard.kahioja.com/assets/images/products/'.$productt->photo,
            ])
        @else
            <meta name="keywords" content="Kahioja">
            <meta name="author" content="Kahioja Store">
            <title>Kahioja</title>
        @endif
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
	    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
        <!-- CSS -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <!-- Share JS -->
        <script src="{{ asset('js/share.js') }}"></script>
    </head>
    <body>
        <!-- Nav  -->
        <div id="app">
            <nav-component></nav-component> 
            @yield('main')
            <footer-component></footer-component> 
        </div>
        
        <script src="{{ asset('/js/sandbox.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
        @if(!(isset($productt)))
            <script src="{{ asset('/js/main.js') }}"></script>
        @else
            <script src="{{ asset('/js/gallery.js') }}"></script>
        @endif
        <script src="{{ asset('/js/slider.js') }}"></script>
    </body>
</html>
