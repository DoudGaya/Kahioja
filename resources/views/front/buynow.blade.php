@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center top-36 md:top-18 my-6 md:px-14">
        <buynow-component
            :productid="{{ json_encode($product->id) }}" 
            :productphoto="{{ json_encode($product->photo) }}" 
            :productname="{{ json_encode($product->name) }}" 
            :productquantity="{{ json_encode($quantity) }}" 
            :productprice="{{ json_encode($product->price) }}" 
            :deliveryfee="{{ json_encode($product->ship_fee) }}"
        ></buynow-component>
    </div>
@endsection