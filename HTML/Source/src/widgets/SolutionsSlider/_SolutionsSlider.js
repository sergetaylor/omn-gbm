import * as Swiper from 'swiper/dist/js/swiper.js';

setTimeout(() => {
    let testimonialSwipers = document.querySelectorAll('.widget-solutions-slider');
    testimonialSwipers.forEach(elm => {
        //console.log(elm);
        new Swiper(elm.querySelector(' .swiper-container'), {
            slidesPerView: 3,
            spaceBetween: 40,
            pagination: {
                el: elm.querySelector('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: elm.querySelector('.swiper-next'),
                prevEl: elm.querySelector('.swiper-prev'),
            },
            breakpoints: {
            
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
            }
        });

    });
}, 100);
