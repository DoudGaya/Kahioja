<div class="grid lg:grid-cols-8 md:grid-cols-4 grid-cols-2 gap-3">
    @foreach($products as $product)
    <div class="bg-white rounded-lg lg:my-4 my-1 cursor-pointer yus-shadow">
        <a href="/item/{{$product->slug}}">

            <img id="product_img" class="w-full object-cover" src="https://dashboard.kahioja.com/assets/images/products/{{$product->photo}}">
            <!-- Product Details  -->
            <div class="lg:py-3 py-1 px-4">
                <h1 class="text-sm w-full card-title">{{ $product->name }}</h1>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="card-curr-price"><b>₦{{ round((($product->price * 0.143) + $product->price), 2) }}</b></span>
                    </div>
                    <div class="grid grid-cols-2 text-left md:flex md:flex-row card-reviews my-2">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.93359 6.64258H12.5352" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M5.93359 9.3125H9.79074" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M8.70742 20.25H3.71741C3.52714 20.25 3.34467 20.1744 3.21013 20.0399C3.07558 19.9053 3 19.7229 3 19.5326V4.46741C3 4.27714 3.07558 4.09467 3.21013 3.96013C3.34467 3.82558 3.52714 3.75 3.71741 3.75H20.2826C20.4729 3.75 20.6553 3.82558 20.7899 3.96013C20.9244 4.09467 21 4.27714 21 4.46741V12.6758" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M12.8297 21.3918C13.4044 21.3918 13.8703 20.9259 13.8703 20.3511C13.8703 19.7764 13.4044 19.3105 12.8297 19.3105C12.255 19.3105 11.7891 19.7764 11.7891 20.3511C11.7891 20.9259 12.255 21.3918 12.8297 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M19.9703 21.3918C20.545 21.3918 21.0109 20.9259 21.0109 20.3511C21.0109 19.7764 20.545 19.3105 19.9703 19.3105C19.3956 19.3105 18.9297 19.7764 18.9297 20.3511C18.9297 20.9259 19.3956 21.3918 19.9703 21.3918Z" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M11.7865 20.3787H11.1905C11.17 20.3787 11.1504 20.3706 11.1359 20.3561C11.1214 20.3416 11.1133 20.322 11.1133 20.3015V14.8233C11.1133 14.8029 11.1214 14.7832 11.1359 14.7687C11.1504 14.7542 11.17 14.7461 11.1905 14.7461H19.4469C19.5051 14.7461 19.5625 14.7592 19.6149 14.7845C19.6672 14.8099 19.7132 14.8467 19.7494 14.8923L21.7838 17.457C21.8379 17.5253 21.8674 17.6099 21.8674 17.697V20.3015C21.8674 20.3117 21.8654 20.3217 21.8615 20.3311C21.8576 20.3405 21.8519 20.349 21.8448 20.3562C21.8376 20.3633 21.8291 20.369 21.8197 20.3729C21.8103 20.3768 21.8003 20.3788 21.7901 20.3788H21.0082" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M18.9309 20.3789H13.8711" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/><path d="M17.4844 14.7461V20.3501" stroke="#7E7E7E" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                        </div>
                        &nbsp;
                        @if($product->ship_fee != 0 || $product->ship_fee != '')
                            <div>{{ number_format((($product->ship_fee * 0.075) + $product->ship_fee), 2, '.', ',') }}</div>
                        @else
                            <div>Free Delivery</div>
                        @endif
                    </div>
                </div>
                <!-- <div class="grid grid-cols-2 text-left md:flex md:flex-row card-reviews my-2">
                    <div>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9157 22.0795C20.4602 22.0795 22.5229 20.0168 22.5229 17.4724C22.5229 14.9279 20.4602 12.8652 17.9157 12.8652C15.3713 12.8652 13.3086 14.9279 13.3086 17.4724C13.3086 20.0168 15.3713 22.0795 17.9157 22.0795Z" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M17.918 14.3809V17.4716L20.0307 18.7586" stroke="#7E7E7E" stroke-width="0.988223" stroke-linecap="round"/><path d="M11.7867 20.5781H3.99866C3.80839 20.5781 3.62592 20.5025 3.49138 20.368C3.35683 20.2335 3.28125 20.051 3.28125 19.8607V4.79554C3.28125 4.60527 3.35683 4.42279 3.49138 4.28825C3.62592 4.15371 3.80839 4.07812 3.99866 4.07812H20.5638C20.7541 4.07812 20.9366 4.15371 21.0711 4.28825C21.2057 4.42279 21.2813 4.60527 21.2813 4.79554V11.8171" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 6.9707H12.8165" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6.21484 9.64062H10.072" stroke="#7E7E7E" stroke-width="0.988223" stroke-miterlimit="10" stroke-linecap="round"/></svg>
                    </div> 
                    &nbsp;
                    <div>1 Day Delivery within Kano</div>
                </div> -->
            </div>
        </a>
    </div>
    @endforeach
</div>