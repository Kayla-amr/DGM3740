const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    //Enable Auto Play
    autoplay:{
        delay:5000,
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  });