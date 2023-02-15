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

var pageId = splitLink[numberOfParts - 1];
console.log('>>>>>> '+pageId)

if (pageId !== ""){
  var primaryNav = document.querySelectorAll("ul#primaryNav li a")
  console.log(primaryNav.length)

  var i;

  for(i = 0; i < primaryNav.length; i++){

    var currPage = (primaryNav[i].getAttribute("href"));
    console.log(myPage);

    var currArray = currPage.split('/');
    currArray = currArray[0];
  
    currArray = currArray.split('#')
    currArray = currArray[0];
    
    console.log ('>>> '+ currPage);

    if(pageId === currPage){

      pageId[i].parentNode.className = "active";
      pageId[i].parentNode.parentNode.parentNode.className = "parent";

    } 
    else{

      pageId[i].parentNode.className ="";

    }
   }

}


// var test3 = "index.php";

// var i;
