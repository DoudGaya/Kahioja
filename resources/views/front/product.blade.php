@extends('layout.template')

@section('meta_description')
        {{ $productt->details }}
@endsection

@section('meta_kewords')
         {{ $productt->meta_tag }}
@endsection

@section('main')
    <!-- Banner -->
    <div class="relative md:-mt-10 lg:mt-28 -mt-24 lg:px-14 py-5 text-center top-12 md:px-14 px-4">
        <!-- Nav  -->
        <div id="product-details-nav" class="mt-40 md:mt-32 lg:mt-0">
            <ul class="flex text-xs">
                <li class="ml-1"><a href="{{route('front.index')}}">Home/ </a></li>
                <li class="ml-1"><a href="{{route('front.category',$productt->category->slug)}}">{{$productt->category->name}}/ </a></li>
                @if($productt->subcategory_id != null)
                <li class="ml-1">
                    <a href="{{ route('front.subcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug]) }}">{{$productt->subcategory->name}}/ </a>
                </li class="ml-1">
                @endif
                @if($productt->childcategory_id != null)
                <li class="ml-1">
                    <a href="{{ route('front.childcat',['slug1' => $productt->category->slug, 'slug2' => $productt->subcategory->slug, 'slug3' => $productt->childcategory->slug]) }}">{{$productt->childcategory->name}}/ </a>
                </li>
                @endif
                <li class="ml-1"><a href="{{ route('front.product', $productt->slug) }}">{{ $productt->name }}/ </a>
            </ul>
        </div>
        <!-- Product  -->
        <div id="productDetails">
            <product-details-component 
                :productid="{{ json_encode($productt->id) }}" 
                :productimage="{{ json_encode($productt->photo) }}" 
                :productgallery="{{ json_encode($productt->galleries) }}" 
                :productname="{{ json_encode($productt->name) }}" 
                :productcurrprice="{{ round((json_encode($productt->price) * 0.15) + json_encode($productt->price), 2) }}" 
                :productprevprice="{{ ($productt->previous_price != null) ? round((json_encode($productt->previous_price) * 0.15) + json_encode($productt->previous_price), 2) : $productt->previous_price }}" 
                :productsku="{{ json_encode($productt->sku) }}" 
                :productstock="{{ json_encode($productt->stock) }}" 
                :productminimumorderqty="{{ json_encode($productt->minimum_order_qty) }}" 
                :deliverytime="{{ json_encode($productt->ship) }}" 
                :store="{{ json_encode($store) }}" 
                :productdeliveryfee="{{ ($productt->ship_fee != null) ? round((json_encode($productt->ship_fee) * 0.15) + json_encode($productt->ship_fee), 2) : $productt->ship_fee }}" 
                :productquantityinbag="{{ json_encode($product_quantity_in_bag) }}" 
                :productwholesale="{{ json_encode($wholesale) }}" 
            ></product-details-component>    
        </div>

        <div class="mb-4">
            {!! $shareproduct !!}
        </div>
        
        <hr>
        
        <!-- Product Description & Reviews & Return Policy  -->
        <div id="productDescription">
            <product-description-component
                :productdetails="{{ json_encode($productt->details) }}"
            ></product-description-component>
        </div>
        <!-- Similar Products -->
        <div id="similar-product" class="lg:mt-20 md:mb-20 mb-12">
            <h1 class="headings-yus">Similar product you may like</h1>
            <div id="product" class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-4 gap-6">
                @foreach($productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(8)->get() as $prod)
                    @include('includes.productComponent')
                @endforeach
            </div>
        </div>
    </div>
@endsection