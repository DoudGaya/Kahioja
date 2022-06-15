@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center top-8 md:top-5 lg:top-5 md:px-14">
        <!-- Category Nav  -->
        <category-component></category-component>
        <!-- Category Content  -->
        <div id="cate-content" class="my-16">
            @if(count($products))
            <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-6">
                @foreach($products as $prod)
                    @include('includes.productComponent')
                @endforeach
            </div>
            @else
                <div class="text-center text-2xl font-bold">No Product Found</div>
            @endif
        </div>
        <div class="hidden my-28 md:flex justify-center">
            {{ $products->links('layout.pagination') }}
        </div>
        <div class="sm:block md:hidden my-28 pt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection