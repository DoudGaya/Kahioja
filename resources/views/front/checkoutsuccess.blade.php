@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="relative top-36 md:top-0 mt-6 md:px-14 px-4">
        <transaction-successful-component
            :subtotal="{{ json_encode($order->pay_amount) }}" 
            :deliveryfee="{{ json_encode($deliveryFee) }}" 
            :servicefee="{{ json_encode($serviceFee) }}" 
            :transactionid="{{ json_encode($transactID) }}" 
            :orderid="{{ json_encode($order->order_number) }}" 
            :bags="{{ json_encode($bags) }}" 
        >
        </transaction-successful-component>
    </div>
@endsection