import * as Swiper from 'swiper/dist/js/swiper.js';


setTimeout(() => {
    let subNavSliders = document.querySelectorAll('.widget-secondary-nav');
    subNavSliders.forEach(elm => {
        //console.log(elm.querySelector('.swiper-container'))
       new Swiper(elm.querySelector('.swiper-container'), {
        slidesPerView: 'auto',
        spaceBetween: 0,
        slideClass: 'slide',
        freeMode: true,
        // pagination: {
        //     el: elm.querySelector('.swiper-pagination'),
        //     clickable: true,
        // },
        navigation: {
            nextEl: elm.querySelector('.swiper-button-next'),
            prevEl: elm.querySelector('.swiper-button-prev'),
        },

            
  
         
        });

    });
}, 100);
