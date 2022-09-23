<product-component 
    :productid="{{ json_encode($prod->id) }}" 
    :productlink="{{ json_encode('/item/'.$prod->slug) }}" 
    :productimage="{{ json_encode($prod->photo) }}" 
    :productname="{{ json_encode($prod->name) }}" 
    :productcurrprice="{{ round((json_encode($prod->price) * 0.143) + json_encode($prod->price), 2)  }}" 
    :productstock="{{ json_encode($prod->stock) }}" 
    :productdeliveryfee="{{ json_encode($prod->ship_fee) }}" 
>
</product-component>