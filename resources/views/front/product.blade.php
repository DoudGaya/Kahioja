@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="mt-6 md:px-14 px-4">
        <!-- Nav  -->
        <div id="product-details-nav">
            <ul class="flex">
                <li class="ml-1"><a href="{{route('front.index')}}">Home / </a></li>
                <li class="ml-1"><a href="{{route('front.category',$productt->category->slug)}}">{{$productt->category->name}}  / </a></li>
                @if($productt->subcategory_id != null)
                <li class="ml-1">
                    <a href="{{ route('front.subcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug]) }}">{{$productt->subcategory->name}}  / </a>
                </li class="ml-1">
                @endif
                @if($productt->childcategory_id != null)
                <li class="ml-1">
                    <a href="{{ route('front.childcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug, 'slug3' => $productt->childcategory->slug]) }}">{{$productt->childcategory->name}} / </a>
                </li>
                @endif
                <li class="ml-1"><a href="{{ route('front.product', $productt->slug) }}">{{ $productt->name }} / </a>
            </ul>
        </div>
        <!-- Product  -->
        <div id="productDetails">
            <product-details-component 
                :productid="{{ json_encode($productt->id) }}" 
                :productimage="{{ json_encode(asset('images/products/'.$productt->photo)) }}" 
                :productname="{{ json_encode($productt->name) }}" 
                :productcurrprice="{{ json_encode($productt->showPrice()) }}" 
                :productsku="{{ json_encode($productt->sku) }}" 
                :productdeliveryfee="{{ json_encode($productt->showShippingFee()) }}" 
            ></product-details-component>    
        </div>
        <hr>
        <!-- Product Description & Reviews & Return Policy  -->
        <div id="productDescription">
            <product-description-component></product-description-component>
        </div>
        <!-- Similar Products -->
        <div id="similar-product" class="mt-20 md:mb-8 mb-3">
            <h1 class="headings-yus">Similar product you may like</h1>
            <div id="product" class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(8)->get() as $prod)
                    @include('includes.productComponent')
                @endforeach
            </div>
        </div>
    </div>
@endsection