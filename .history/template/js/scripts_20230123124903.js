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

//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links
function toggleMenu() {
  document.getElementById("primaryNav").classList.toggle("close");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 