@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 px-4 py-5 text-center top-20 md:top-10 lg:top-5 md:px-14">
        <!-- Category Nav  -->
        <category-component></category-component>
        <!-- Category Content  -->
        <div id="cate-content" class="lg:my-16 md:my-2 my-1">
            <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-6">
                @foreach($products as $prod)
                    @include('includes.productComponent')
                @endforeach
            </div>
        </div>
        <div class="hidden my-28 md:flex justify-center">
            {{ $products->links('layout.pagination') }}
        </div>
        <div class="sm:block md:hidden my-28 pt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection