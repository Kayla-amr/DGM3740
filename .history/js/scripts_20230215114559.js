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
var pageLocation = location.href;
console.log(pageLocation);

var splitLink = pageLocation.split('/');
console.log(splitLink);

var numberOfParts = splitLink.length;
console.log(numberOfParts);

var pieceIwant = splitLink[numberOfParts - 1];
console.log('>>>>>> '+pieceIwant)

// var countUl = document.querySelectorAll("ul#primaryNav li a")
// console.log(test2)


// var test3 = "book.php";

// var i;
// for(i = 0; i < test2.length; i++){
//   var myPage = test2[0].getAttribute("href");
//   console.log(myPage);

//   if(test3 === myPage){
//     test3[i].parentNode.className = "active";
//     test3[i].parentNode.parentNode.parentNode.className = "parent";
//   } else{
//     test3[i].parentNode.className =" ";
//   }
// }