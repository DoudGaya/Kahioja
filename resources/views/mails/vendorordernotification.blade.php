<div style='width: 80%; margin:0px auto; border:2px solid #eee; text-align:left; padding: 2% 4%; line-height: 1.6; text-align: center;'>
    <div style='padding-bottom:1%;'>
        <center><img style='width:20%;' src='https://kahioja.com/images/kahioja.png' alt='Kahioja Image'></center>
    </div>
    <div style='border-top:2px solid #df7f1b; padding:2%;'>
        <center><img style='width:20%;' src='https://kahioja.com/images/thank-you.jpg' alt='Thank You'></center>
    </div>
    <div style="text-align: left;">
        <div>
            <h1 style='color:#df7f1b;'>You have an order from <b>{{ $cust_name }}</b></h1>
        </div>
        <div>
            Order No: <b>{{ $order_no }}</b>
        </div>
        <div>
            Amount Paid: <b>N{{ $amount }}</b>
        </div>
        <div>
            Customer Name: <b>{{ $cust_name }}</b>,
        </div>
        <div>
            Customer Phone: <b>{{ $cust_phone }}</b>,
        </div>
        <div>
            Customer Email: <b>{{ $cust_email }}</b>,
        </div>
        <div>
            Customer Address: <b>{{ $cust_address }}</b>,
        </div>
    </div>
    <div style="text-align: left;">
        <div>
            <h1 style='color:#df7f1b;'>Products Ordered</h1>
        </div>
        <div style="width: 100%; float:left; margin-bottom: 5%;">
            @foreach($cart as $product)
                <div style="width:22%; float: left; margin-left: 2%; font-size: 80%;">
                    <div class="col-span-1">
                        <img style="width: 100px; height: 100px; border: 1px solid #ddd;" src="https://dashboard.kahioja.com/assets/images/products/{{$product->product_photo}}">
                    </div>
                    <div>
                        <span class="col-span-1"><b>Product:</b></span>
                        <span class="col-span-2">{{ $product->product_name }}</span>
                    </div>
                    <div>
                        <b><span>Quantity:</span></b>
                        <span>X{{ $product->quantity }}</span>
                    </div>
                    <div>
                        <b><span>Total Amount:</span></b>
                        <span>N{{ $product->amount }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        Your KAHIOJA Team
    </div>
    <div style='border-top:2px solid #000; margin-top:1%; padding:2%;'>
        <center><img style='width:15%;' src='https://kahioja.com/images/logo.png' alt='Kahioja Image'></center>
    </div>
    <div style='text-align:center; font-size:11px; line-height:1.3;'>
        A1/A2 Block A Hamisu Abba Sumaila Plaza Tarauni Kano, Nigeria | <a style='color:#df7f1b;'>info@kahioja.com</a><br>
        You've received this email because you have an account with KAHIOJA.
    </div>
</div>