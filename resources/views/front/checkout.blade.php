@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="relative top-36 md:top-0 mt-6 md:px-14 px-4">
        <form action="{{ route('flutterwave.submit') }}" method="POST">
            @csrf
            <checkout-component></checkout-component>
    </div>
@endsection