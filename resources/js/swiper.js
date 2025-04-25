
import Swiper from "swiper";
import {Autoplay, Navigation} from 'swiper/modules';


function testimonialSwiper() { 
  new Swiper('.testi-swiper', {
    // slidesPerView: 5,
    modules: [Navigation, Autoplay],
    centeredSlides: true,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".testi-button-next",
        prevEl: ".testi-button-prev",
      },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 2.5,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
}
  

testimonialSwiper();