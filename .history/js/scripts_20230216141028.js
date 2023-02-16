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

var splitLink = pageLocation.split('/');

var numberOfParts = splitLink.length;

var pageId = splitLink[numberOfParts - 1];

if (pageId !== ""){
  var primaryNav = document.querySelectorAll("ul#primaryNav li a")

  var i;

  for(i = 0; i < primaryNav.length; i++){

    var currPage = (primaryNav[i].getAttribute("href"));

    if (pageId === currPage.split('/').pop()) {
      primaryNav[i].parentNode.className = "active";
      primaryNav[i].parentNode.parentNode.parentNode.className = "parent";

    } else {
      primaryNav[i].parentNode.className = "";
    }
  }
}

