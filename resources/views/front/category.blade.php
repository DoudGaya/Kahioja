@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="mt-6 px-4 lg:px-14">
        <!-- Category Nav  -->
        <category-component></category-component>
        <!-- Category Content  -->
        <div id="cate-content" class="my-16">
            @if(count($products))
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($products as $prod)
                    @include('includes.productComponent')
                @endforeach
            </div>
            @else
                <div class="text-center text-2xl font-bold">No Product Found</div>
            @endif
            <div class="my-16 flex justify-center">
                {{ $products->links('layout.pagination') }}
            </div>
        </div>
    </div>
@endsection