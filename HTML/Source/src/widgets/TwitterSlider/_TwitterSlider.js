import * as Swiper from 'swiper/dist/js/swiper.js';


setTimeout(() => {
    let twitterSliders = document.querySelectorAll('.widget-twitter-slider');
    twitterSliders.forEach(elm => {
        new Swiper(elm.querySelector(' .swiper-container'), {
           slidesPerView: 3,
            spaceBetween: 40,
            
            pagination: {
                el: elm.querySelector('.swiper-nav'),
                clickable: true,
            },
            navigation: {
                nextEl: elm.querySelector('.swiper-next'),
                prevEl: elm.querySelector('.swiper-prev'),
            },
            breakpoints: {
            
                960: {
                    slidesPerView: 2,
                },
                720: {
                    slidesPerView: 1,
                },
            }
         
        });

    });
}, 100);
