<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahioja Store</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon"  type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style type="text/css">
        @page { size: auto;  margin: 0mm; }
        @page {
        size: A4;
        margin: 0;
        }
        
        @media print {
        html, body {
            width: 210mm;
            height: 287mm;
            font-size: 50%;
        }

        html {

        }
        ::-webkit-scrollbar {
            width: 0px;  /* remove scrollbar space */
            background: transparent;  /* optional: just make scrollbar invisible */
        }
    </style>
</head>
<body class="px-4" onload="window.print();">
    <!-- logo  -->
    <div class="mt-14 mb-6">
        <svg id="logo-icon" viewBox="0 0 197 43" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.9097 40.487C32.1734 40.487 33.9921 38.649 33.9921 36.4046C33.9921 34.1603 32.1541 32.3223 29.9097 32.3223C27.6461 32.3223 25.8274 34.1603 25.8274 36.4046C25.8274 38.649 27.6461 40.487 29.9097 40.487Z" fill="#F37022"/><path d="M11.801 42.3826C14.0647 42.3826 15.8834 40.5445 15.8834 38.3002C15.8834 36.0365 14.0453 34.2179 11.801 34.2179C9.55668 34.2179 7.71865 36.0559 7.71865 38.3002C7.71865 40.5445 9.55668 42.3826 11.801 42.3826Z" fill="#F37022"/><path d="M30.0082 30.9875L9.22883 33.1738C5.08843 33.5994 1.39303 30.6005 0.948035 26.4795L0 17.5215L35.7545 13.7681L36.7025 22.726C37.1668 26.8664 34.1486 30.5618 30.0082 30.9875Z" fill="#F37022"/><path d="M5.30382 13.5548C4.646 6.84119 9.599 0.766028 16.3126 0.0695131C23.0263 -0.64635 29.1208 4.2486 29.8753 10.9816L25.5995 11.4459C25.1158 7.05401 21.1302 3.86165 16.7383 4.34534C12.3464 4.80968 9.11531 8.7566 9.54096 13.1485L5.30382 13.5548Z" fill="#F37022"/><path d="M54.5434 22.7262L51.8154 25.7445V31.8777H47.5202V9.82137H51.8154V19.8048L60.6572 9.82137H66.2874L57.5423 19.4372L66.3454 31.8777H60.9474L54.5434 22.7262Z" fill="#222222"/><path d="M109.587 32.0909V22.9394H99.9714V32.0909H95.6762V10.0345H99.9714V18.8958H109.587V10.0345H113.921V32.0909H109.587Z" fill="#222222"/><path d="M119.589 32.0909V10.0345H123.923V32.0909H119.589Z" fill="#222222"/><path d="M139.867 32.9803C133.559 32.9803 128.432 27.8532 128.432 21.5459C128.432 15.2386 133.559 10.1114 139.867 10.1114C146.174 10.1114 151.301 15.2386 151.301 21.5459C151.301 27.8532 146.174 32.9803 139.867 32.9803ZM139.867 14.484C135.958 14.484 132.785 17.657 132.785 21.5652C132.785 25.4735 135.958 28.6465 139.867 28.6465C143.775 28.6465 146.948 25.4735 146.948 21.5652C146.948 17.6377 143.775 14.484 139.867 14.484Z" fill="#222222"/><path d="M80.4492 9.41507C74.1418 9.41507 69.0147 14.5422 69.0147 20.8495V31.8777H73.3679V25.106H87.5304V32.0325H91.8836V20.8689C91.8836 14.5422 86.7565 9.41507 80.4492 9.41507ZM80.4492 13.7683C84.3187 13.7683 87.453 16.9026 87.511 20.7334H73.3486C73.426 16.8833 76.5796 13.7683 80.4492 13.7683Z" fill="#222222"/><path d="M185.566 9.41507C179.258 9.41507 174.131 14.5422 174.131 20.8495V31.8777H178.484V25.106H192.647V32.0325H197V20.8689C197 14.5422 191.873 9.41507 185.566 9.41507ZM185.566 13.7683C189.435 13.7683 192.57 16.9026 192.628 20.7334H178.465C178.562 16.8833 181.696 13.7683 185.566 13.7683Z" fill="#222222"/><path d="M170.513 24.5643V10.3051H166.141V24.5643C166.141 26.5958 164.477 28.2404 162.465 28.2404C160.433 28.2404 158.789 26.5765 158.789 24.5643C158.789 24.4289 158.789 24.2935 158.808 24.158C158.808 24.1 158.827 24.0226 158.847 23.9452H154.455C154.455 24.0032 154.455 24.0806 154.435 24.158C154.435 24.2935 154.435 24.4289 154.435 24.5643C154.435 28.9949 158.034 32.5936 162.465 32.5936C166.837 32.5936 170.417 29.0723 170.494 24.7385L170.513 24.5643Z" fill="#222222"/></svg>
    </div>
    <!-- Product Details  -->
    <div>
        <div class="text-2xl font-extrabold my-4">
            Products ({{ count($products) }})
        </div>
        <div class="grid grid-cols-5 gap-4 w-full">
            @foreach($products as $product)
                <div>
                    <div class="col-span-1">
                        <img style="width: 50px; height: 50px; bproduct: 1px solid #ddd;" src="https://dashboard.kahioja.com/assets/images/products/{{$product->photo}}">
                    </div>
                    <div class="col-span-2 py-5">
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Product:</b></span>
                            <span class="col-span-2">{{ $product->name }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Category:</b></span>
                            <span class="col-span-2">{{ \App\Models\Category::where(['id' => $product->category_id])->pluck('name')->first()}}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Price:</b></span>
                            <span class="col-span-2">____________________</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="w-full text-sm">
        <div class="flex justify-between">
            <div>
                Date Generated {{ date('h:ia', time() + 3600) }} {{ date('d M Y') }}
            </div>
            <div class="mr-6">
                Kahioja Stores <br>
                www.kahioja.com
            </div>
        </div>
    </div>
    
</body>
</html>