@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="mt-6 px-14">
        <!-- Category Nav  -->
        <category-component></category-component>
        <!-- Category Content  -->
        <div id="cate-content" class="my-16">
            <div class="grid grid-cols-4 gap-6">
                @if(count($products))
                    @foreach($products as $prod)
                        @include('includes.productComponent')
                    @endforeach
                @else
                    <div class="text-center text-2xl font-bold">No Product Found</div>
                @endif
            </div>
            <div class="my-16 flex justify-center">
                {{ $products->links('layout.pagination') }}
            </div>
        </div>
    </div>
@endsection