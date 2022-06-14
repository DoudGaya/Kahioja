@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="banner-class relative top-64 md:top-56 lg:-top-6 py-7">
        <div class="md:text-2xl text-lg my-5">
            Payment Cancelled
        </div> 
        <div>
            <img class="mx-auto md:w-1/6 w-2/6" src="{{ asset('images/payment-cancelled.png') }}" alt="Payment Cancelled">
        </div>
    </div>
@endsection 