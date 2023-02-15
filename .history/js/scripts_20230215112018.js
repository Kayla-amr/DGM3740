const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    speed:2000,
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    //Enable Auto Play
    autoplay:{
        delay:5000,
    },

  });

  function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open")
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 


///////Assignment 2
var test = location.href;
console.log(test);

var resultsArray = test.split('/');
console.log(resultsArray);

var numberOfParts = resultsArray.length;
console.log(numberOfParts);

var pieceIwant = resultsArray[numberOfParts - 1];
console.log('>>>>>>'+pieceIwant)

var test2 = document.querySelectorAll("ul#primaryNav li a")
console.log(test2)

var i
for(i = 0;){}
console.log(test2[0].getAttribute("href"))