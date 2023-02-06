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
    document.querySelector(".hamburgerBtn").classList.toggle("open")
    document.querySelector(".primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 