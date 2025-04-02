// resources/js/app.js
// import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination, EffectFade, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

document.addEventListener('DOMContentLoaded', () => {
  const swiperInstance = new Swiper('.swiper', {
    modules: [Navigation, Pagination, EffectFade, Autoplay], // Đảm bảo đã import các module cần thiết
    effect: 'fade',
    loop: true,
    speed: 1500,
    autoplay: {
      delay: 3000, // Chuyển slide sau mỗi 3 giây
      disableOnInteraction: false, // Tiếp tục autoplay ngay cả khi người dùng tương tác
    },
    pagination: {
      el: '.dotted',
      clickable: true,
      bulletClass: 'dotted_index',
      bulletActiveClass: 'active_dotted_index',
    },
    navigation: {
      nextEl: '.custom-next',
      prevEl: '.custom-prev',
    },
  });

});