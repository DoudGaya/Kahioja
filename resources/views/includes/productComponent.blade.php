<product-component 
    :productid="{{ json_encode($prod->id) }}" 
    :productlink="{{ json_encode('/item/'.$prod->slug) }}" 
    :productimage="{{ json_encode($prod->photo) }}" 
    :productname="{{ json_encode($prod->name) }}" 
    :productcurrprice="{{ json_encode($prod->price) }}" 
    :productdeliveryfee="{{ json_encode($prod->showShippingFee()) }}" 
>
</product-component>