<product-component 
    :productid="{{ json_encode($prod->id) }}" 
    :productlink="{{ json_encode('/item/'.$prod->slug) }}" 
    :productimage="{{ json_encode($prod->photo) }}" 
    :productname="{{ json_encode($prod->name) }}" 
    :productcurrprice="{{ round((json_encode($prod->price) * 0.15) + json_encode($prod->price), 2)  }}" 
    :productprevprice="{{ ($prod->previous_price != null) ? round((json_encode($prod->previous_price) * 0.15) + json_encode($prod->previous_price), 2) : $prod->previous_price  }}" 
    :productstock="{{ json_encode($prod->stock) }}" 
    :productdeliveryfee="{{ ($prod->ship_fee != null) ? round((json_encode($prod->ship_fee) * 0.15) + json_encode($prod->ship_fee), 2) : $prod->ship_fee }}" 
>
</product-component>