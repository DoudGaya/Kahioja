@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="banner-class">
        <div class="md:text-2xl text-lg my-5">
            Payment Cancelled
        </div> 
        <div>
            <img class="mx-auto md:w-1/6 w-2/6" src="{{ asset('images/payment-cancelled.png') }}" alt="Payment Cancelled">
        </div>
    </div>
@endsection 