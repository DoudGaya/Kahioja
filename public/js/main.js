//Product Slideshow
// const buttonLeft = document.getElementById('slideLeft')
// const buttonRight = document.getElementById('slideRight')

// buttonLeft.addEventListener('click', function(){
//   document.getElementById('slider').scrollTop -= 400
// })

// buttonRight.addEventListener('click', function(){
//   document.getElementById('slider').scrollTop += 400
// })

let  productGallery = document.getElementsByClassName('product-gallery')

for(var i=0; i < productGallery.length; i++){
  productGallery[i].addEventListener('click', function(){
    document.getElementById('featured-product').src = this.src
  })
}
