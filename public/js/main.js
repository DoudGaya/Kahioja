// Horizontal Scroll
// a) Fashion  
const buttonRightFash = document.getElementById('slideRightFash');
const buttonLeftFash = document.getElementById('slideLeftFash');

  buttonRightFash.onclick = function () {
    document.getElementById('fashion').scrollLeft -= 150;
  };

  buttonLeftFash.onclick = function () {
    document.getElementById('fashion').scrollLeft += 150;
  };

// b) Groceries  
const buttonRightGroceries = document.getElementById('slideRightGroceries');
const buttonLeftGroceries = document.getElementById('slideLeftGroceries');

  buttonRightGroceries.onclick = function () {
    document.getElementById('groceries').scrollLeft -= 150;
  };

  buttonLeftGroceries.onclick = function () {
    document.getElementById('groceries').scrollLeft += 150;
  };

// c) Drinks  
const buttonRightDrinks = document.getElementById('slideRightDrinks');
const buttonLeftDrinks = document.getElementById('slideLeftDrinks');

  buttonRightDrinks.onclick = function () {
    document.getElementById('drinks').scrollLeft -= 150;
  };

  buttonLeftDrinks.onclick = function () {
    document.getElementById('drinks').scrollLeft += 150;
  };

// d) Toiletries  
const buttonRightToiletries = document.getElementById('slideRightToiletries');
const buttonLeftToiletries = document.getElementById('slideLeftToiletries');

  buttonRightToiletries.onclick = function () {
    document.getElementById('toiletries').scrollLeft -= 150;
  };

  buttonLeftToiletries.onclick = function () {
    document.getElementById('toiletries').scrollLeft += 150;
  };