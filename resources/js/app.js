import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

// Thêm swiper khởi tạo
document.addEventListener('DOMContentLoaded', function() {
    // Header scroll code (như trên)...
    
    // Khởi tạo Swiper cho hero slider
    if (document.querySelector('.hero-swiper')) {
        const heroSwiper = new Swiper('.hero-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
});