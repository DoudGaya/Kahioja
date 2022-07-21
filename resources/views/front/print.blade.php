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
    <!-- Payment Details and Customer Info  -->
    <div class="grid grid-cols-2 gap-4">
        <!-- Payment Details  -->
        <div class="mb-6">
            <div class="text-2xl font-extrabold mt-2">
                Payment Information
            </div>
            <div class="py-1 w-full font-bold">
                <div class="flex justify-between w-3/4 my-2">
                    <div>Payment Status</div>
                    <div class="text-right">
                        <svg width="82" height="20" viewBox="0 0 82 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="82" height="20" rx="10" fill="#229A54"/><path d="M31.256 9.464V6.548H32.96C33.98 6.548 34.604 7.124 34.604 8.024C34.604 8.9 33.98 9.464 32.96 9.464H31.256ZM33.176 10.52C34.748 10.52 35.804 9.452 35.804 8.012C35.804 6.584 34.748 5.492 33.176 5.492H30.08V14H31.256V10.52H33.176ZM36.3969 12.452C36.3969 13.364 37.1529 14.18 38.3289 14.18C39.3609 14.18 39.9369 13.628 40.1889 13.22C40.1889 13.64 40.2249 13.856 40.2489 14H41.3529C41.3289 13.856 41.2809 13.556 41.2809 13.052V10.16C41.2809 9.032 40.6089 8.048 38.8809 8.048C37.6329 8.048 36.6369 8.816 36.5169 9.92L37.5969 10.172C37.6689 9.5 38.1129 9.008 38.9049 9.008C39.7809 9.008 40.1529 9.476 40.1529 10.04C40.1529 10.244 40.0569 10.424 39.7089 10.472L38.1489 10.7C37.1529 10.844 36.3969 11.42 36.3969 12.452ZM38.4849 13.232C37.9089 13.232 37.5489 12.824 37.5489 12.392C37.5489 11.876 37.9089 11.6 38.3889 11.528L40.1529 11.264V11.528C40.1529 12.788 39.4089 13.232 38.4849 13.232ZM44.1541 14V8.228H43.0381V14H44.1541ZM42.7861 6.044C42.7861 6.488 43.1461 6.848 43.5901 6.848C44.0461 6.848 44.4061 6.488 44.4061 6.044C44.4061 5.588 44.0461 5.228 43.5901 5.228C43.1461 5.228 42.7861 5.588 42.7861 6.044ZM46.7453 11.096C46.7453 9.908 47.4173 9.068 48.4493 9.068C49.4813 9.068 50.1053 9.884 50.1053 11.072C50.1053 12.26 49.4693 13.16 48.4373 13.16C47.3573 13.16 46.7453 12.284 46.7453 11.096ZM50.1173 13.22C50.1173 13.568 50.1533 13.868 50.1773 14H51.2693C51.2573 13.904 51.2093 13.484 51.2093 12.932V5.312H50.0933V9.044C49.9013 8.576 49.3493 8.072 48.3293 8.072C46.6973 8.072 45.5933 9.464 45.5933 11.096C45.5933 12.812 46.6373 14.156 48.3293 14.156C49.2293 14.156 49.8413 13.676 50.1173 13.124V13.22Z" fill="white"/></svg>
                    </div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Order Date</div>
                    <div class="text-right">{{ date('d M Y',strtotime($orderDetails->created_at)) }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Amount Paid</div>
                    <div class="text-right">N{{ $orderDetails->pay_amount }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Payment Method</div>
                    <div class="text-right">Paystack</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Transaction ID</div>
                    <div class="text-right">{{ $orderDetails->txnid }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Order ID</div>
                    <div class="text-right">{{ $orderNo }}</div>
                </div>
            </div>
        </div>
        <!-- Customer Details  -->
        <div class="mb-6">
            <div class="text-2xl font-extrabold mt-2">
                Customer Information
            </div>
            <div class="py-1 w-full font-bold">
                <div class="flex justify-between w-3/4 my-2">
                    <div>Name</div>
                    <div class="text-right">{{ $orderDetails->customer_name }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Phone</div>
                    <div class="text-right">{{ $orderDetails->customer_phone }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Email</div>
                    <div class="text-right">{{ $orderDetails->customer_email }}</div>
                </div>
                <div class="flex justify-between w-3/4 my-2">
                    <div>Address</div>
                    <div class="text-right">{{ $orderDetails->customer_address }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details  -->
    <div>
        <div class="text-2xl font-extrabold mt-2">
            Product Ordered ({{ count($bags) }})
        </div>
        <div class="grid grid-cols-2 gap-4 w-full">
            @foreach($bags as $order)
                <div>
                    <div class="col-span-1">
                        <img style="width: 100px; height: 100px; border: 1px solid #ddd;" src="https://dashboard.kahioja.com/assets/images/products/{$order->product_photo}">
                    </div>
                    <div class="col-span-2 py-5">
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Product:</b></span>
                            <span class="col-span-2">{{ $order->product_name }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Shop:</b></span>
                            <span class="col-span-2">{{ $order->shop_name }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Shop Address:</b></span>
                            <span class="col-span-2">{{ $order->shop_address }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="col-span-1"><b>Shop Phone:</b></span>
                            <span class="col-span-2">{{ $order->shop_number }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <b><span>Quantity</span></b>
                            <span>X{{ $order->quantity }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <b><span class="col-span-1">Total Amount</span></b>
                            <span class="col-span-2">N{{ $order->amount }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <b><span class="col-span-1">Delivery Status</span></b>
                            <span class="col-span-2">{{ $order->order_status }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="absolute bottom-0 w-full text-sm">
        <div class="flex justify-between">
            <div>
                Date Generated {{ date('h:ia', time()) }} {{ date('d M Y') }}
            </div>
            <div class="mr-6">
                Kahioja Stores <br>
                www.kahioja.com
            </div>
        </div>
    </div>
    <script type="text/javascript">
        setTimeout(function () {
            window.close();
        }, 500);
    </script>
</body>
</html>