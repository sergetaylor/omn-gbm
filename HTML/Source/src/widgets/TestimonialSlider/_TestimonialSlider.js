import * as Swiper from 'swiper/dist/js/swiper.js';

setTimeout(() => {
    let testimonialSwipers = document.querySelectorAll('.widget-testimonial-slider');
    testimonialSwipers.forEach(elm => {
        new Swiper(elm.querySelector(' .swiper-container'), {
            slidesPerView: 'auto',
            spaceBetween: 20,
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
