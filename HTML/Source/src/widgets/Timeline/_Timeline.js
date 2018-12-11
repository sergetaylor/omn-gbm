import * as Swiper from 'swiper/dist/js/swiper.js';

setTimeout(() => {
    let timelineSwipers = document.querySelectorAll('.widget-timeline');
    timelineSwipers.forEach(elm => {
        new Swiper(elm.querySelector('.swiper-container'), {
            slidesPerView: 'auto',
            spaceBetween: 0,
            //freeMode: true,
            pagination: {
                el: elm.querySelector('.swiper-nav'),
                clickable: true,
            },
            navigation: {
                nextEl: elm.querySelector('.swiper-next'),
                prevEl: elm.querySelector('.swiper-prev'),
            },
         
        });

    });
}, 100);
