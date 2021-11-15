<product-component 
    :productid="{{ json_encode($prod->id) }}" 
    :productlink="{{ json_encode('/item/'.$prod->slug) }}" 
    :productimage="{{ json_encode($prod->thumbnail ? asset('/images/thumbnails/'.$prod->thumbnail):asset('/images/noimage.png')) }}" 
    :productname="{{ json_encode($prod->name) }}" 
    :productcurrprice="{{ json_encode($prod->showPrice()) }}" 
    :productdeliveryfee="{{ json_encode($prod->showShippingFee()) }}" 
>
</product-component>