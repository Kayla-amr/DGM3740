const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    //Enable Autoplay
    autoplay:{
        delay:5000,
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  });