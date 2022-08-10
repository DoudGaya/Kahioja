<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			#container{
				width: 80%; margin:0px auto; border:2px solid #eee; text-align:left; padding: 2% 4%; line-height: 1.6; text-align: center;
			}
			
			#card{
				width:22%; float: left; margin-left: 2%; font-size: 80%;
			}
			
			#logo{
				width:20%;
			}
			
			#footer-img{
				width: 15%;
			}
			
			@media only screen and (max-width:768px)
			{
			
				#container{
					width: 100%;
					border: none;
				}
				
				h1{
					font-size: 16px;
				}
				
				#logo{
					width: 50%;
				}
				
				#footer-img{
					width: 35%;
				}
				
				#card{
					width: 100%;
				}
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div style='padding-bottom:1%;'>
				<center><img id="logo" src='https://kahioja.com/images/kahioja.png' alt='Kahioja Image'></center>
			</div>
			<hr>
			<div style="text-align: left;">
				<div>
					<h1 style='color:#df7f1b;'>You have an order to process from <b>{{ $cust_name }}</b>, kindly start processing immediately.</h1>
				</div>
				<div>
					The Order ID is <b>{{ $order_no }}</b>. A summary of the order is shown below.
				</div>
				<hr>
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
					<h1 style='color:#df7f1b;'>Your Order Contains</h1>
				</div>
				<hr>
				<div style="width: 100%; float:left; margin-bottom: 5%;">
					@foreach($cart as $product)
						<div id="card">
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
				<center><img id="footer-img" src='https://kahioja.com/images/kahioja.png' alt='Kahioja Image'></center>
			</div>
			<div style='text-align:center; font-size:11px; line-height:1.3;'>
				A1/A2 Block A Hamisu Abba Sumaila Plaza Tarauni Kano, Nigeria | <a style='color:#df7f1b;'>info@kahioja.com</a><br>
				You've received this email because you have an account with KAHIOJA.
			</div>
		</div>
	</body>
</html>