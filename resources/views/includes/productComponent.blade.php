<product-component 
    :productid="{{ json_encode($prod->id) }}" 
    :productlink="{{ json_encode('/item/'.$prod->slug) }}" 
    :productimage="{{ json_encode($prod->thumbnail) }}" 
    :productname="{{ json_encode($prod->name) }}" 
    :productcurrprice="{{ json_encode($prod->showPrice()) }}" 
    :productdeliveryfee="{{ json_encode($prod->showShippingFee()) }}" 
>
</product-component>