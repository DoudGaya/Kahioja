@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center md:px-14">
        <buynow-component
            :productid="{{ json_encode($product->id) }}" 
            :productslug="{{ json_encode($product->slug) }}" 
            :productphoto="{{ json_encode($product->photo) }}" 
            :productname="{{ json_encode($product->name) }}" 
            :productquantity="{{ json_encode($quantity) }}" 
            :productprice="{{ json_encode($product_price) }}" 
            :deliveryfee="{{ json_encode($product_delivery_fee) }}"
        ></buynow-component>
    </div>
@endsection