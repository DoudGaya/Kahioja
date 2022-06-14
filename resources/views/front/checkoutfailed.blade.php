@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="banner-class relative top-56 lg:-top-6 py-7">
        <div class="md:text-2xl text-lg my-5">
            Payment Failed
        </div> 
        <div>
            <img class="mx-auto md:w-1/6 w-2/6" src="{{ asset('images/payment-failed.png') }}" alt="Payment Failed">
        </div>
    </div>
@endsection 