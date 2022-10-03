//Product Gallery
let  productGallery = document.getElementsByClassName('product-gallery')

for(var i=0; i < productGallery.length; i++){
  productGallery[i].addEventListener('click', function(){
    document.getElementById('featured-product').src = this.src
  })
}

// e) Gallery  
const buttonRightGallery = document.getElementById('slideRightGallery');
const buttonLeftGallery = document.getElementById('slideLeftGallery');

buttonRightGallery.onclick = function () {
    document.getElementById('gallery').scrollLeft -= 150;
};

buttonLeftGallery.onclick = function () {
    document.getElementById('gallery').scrollLeft += 150;
};