document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('.gallery')) {
    import(/* webpackChunkName: "swiper-styles" */ 'swiper/css');
    import(/* webpackChunkName: "swiper" */ 'swiper')
      .then(({ default: Swiper }) => {
        import(/* webpackChunkName: "swiper-modules" */ 'swiper/modules')
          .then(({ Navigation, Autoplay }) => {
            document.querySelectorAll('.gallery').forEach(gallery => {
              const swiperContainer = gallery.querySelector('.gdymc_gallery_container');
              const swiperWrapper = gallery.querySelector('.gdymc_gallery');
              const swiperSlides = swiperWrapper.querySelectorAll('.gdymc_gallery_item');

              swiperContainer.classList.add('swiper');
              swiperWrapper.classList.add('swiper-wrapper');
              swiperSlides.forEach(slide => {
                slide.classList.add('swiper-slide');
              });

              new Swiper(swiperContainer, {
                modules: [Navigation, Autoplay],
                navigation: {
                  nextEl: gallery.querySelector('.swiper-button-next'),
                  prevEl: gallery.querySelector('.swiper-button-prev')
                },
                loop: true,
                slidesPerView: 1,
                // autoplay: {
                //   delay: 2500,
                //   disableOnInteraction: false,
                //   pauseOnMouseEnter: true
                // }
              });
            });
          });
      });
  }
});