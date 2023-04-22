// Слайдер

const gallerySliderinit = document.querySelector(".gallery-slider");
if(gallerySliderinit) {
  const swiperGallery = new Swiper('.gallery-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    direction: 'horizontal',
    pagination: {
      el: '.gallery-slider-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.gallery-slider-next',
      prevEl: '.gallery-slider-prev',
    },
    breakpoints: {
      320: {
        spaceBetween: 20
      },
      480: {
        spaceBetween: 30
      },
      640: {
        spaceBetween: 32,
      }
    },
  });
} 