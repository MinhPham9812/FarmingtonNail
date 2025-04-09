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
  // Xử lý accordion
  const accordions = document.querySelectorAll('.accordion');

  accordions.forEach(accordion => {
      const header = accordion.querySelector('.flex');
      const span = accordion.querySelector('.rotate__span');
      const content = accordion.querySelector('.span__transition');

      header.addEventListener('click', () => {
          span.classList.toggle('active');
          if (content.classList.contains('h-0')) {
              content.classList.remove('h-0');
              content.classList.add('h-auto', 'py-[15px]');
          } else {
              content.classList.remove('h-auto', 'py-[15px]');
              content.classList.add('h-0');
          }
      });
  });
});