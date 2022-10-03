// e) Gallery  
const buttonRightGallery = document.getElementById('slideRightGallery');
const buttonLeftGallery = document.getElementById('slideLeftGallery');

buttonRightGallery.onclick = function () {
    alert()
    document.getElementById('gallery').scrollLeft -= 150;
};

buttonLeftGallery.onclick = function () {
    document.getElementById('gallery').scrollLeft += 150;
};