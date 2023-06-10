import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
  console.log('swiper');
  const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 20,
    slidesPerView: 'auto',
    breakpoints: {
      1400: {
        spaceBetween: 30,
      }
    }
  });
})
