@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center top-36 lg:top-0">
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