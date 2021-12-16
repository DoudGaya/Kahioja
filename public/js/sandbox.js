// Search Engine 
$(document).on('keyup', '#searchEngine', function(){
    let product = $(this).val();
    
    if(product.length > 2){
        $('#search-bar-callback').removeClass('hidden')

        $.ajax({
            url: `/autosearch/product/${product}`,
            type: "GET",
            data:{
                product:product
            },
            success: function(response){
                console.log(response)
            },
            error: function(error){
                console.log(error)
            }
        })
    }else{
        $('#search-bar-callback').addClass('hidden')
    }
})