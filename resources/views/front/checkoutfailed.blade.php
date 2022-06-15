@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center top-56 lg:-top-6">
        <div class="md:text-2xl text-lg my-5">
            Payment Failed
        </div> 
        <div>
            <img class="mx-auto md:w-1/6 w-2/6" src="{{ asset('images/payment-failed.png') }}" alt="Payment Failed">
        </div>
    </div>
@endsection 