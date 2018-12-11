//import '../../../node_modules/swiper/dist/css/swiper.min.css';
import * as Swiper from 'swiper/dist/js/swiper.js';

setTimeout(() => {
    let coverSwiper = new Swiper(document.querySelector('.widget-cover-slider .swiper-container'), {
        direction: 'vertical',
        effect: 'fade',
        speed: 800,
        //parallax: true,
        fadeEffect: {
            crossFade: true
        },
       
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },
     
    });

}, 100);