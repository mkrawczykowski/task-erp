import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
  console.log('swiper');
  const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 100,
    slidesPerView: 2,
    breakpoints: {
      1400: {
        slidesPerView: 5,
      }
    }
  });
})
