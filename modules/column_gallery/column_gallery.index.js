document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('.column-gallery')) {
    import(/* webpackChunkName: "swiper-styles" */ 'swiper/css');
    import(/* webpackChunkName: "swiper" */ 'swiper')
      .then(({ default: Swiper }) => {
        import(/* webpackChunkName: "swiper-modules" */ 'swiper/modules')
          .then(({ Navigation, Autoplay }) => {
            document.querySelectorAll('.column-gallery').forEach(gallery => {
              const swiperContainer = gallery.querySelector('.column-gallery--container');
              const swiperWrapper = gallery.querySelector('.swiper-wrapper');
              const swiperSlides = swiperWrapper.querySelectorAll('.swiper-slide');
              const swiperSlidesPerView = gallery.dataset.slides || 1;

              if (swiperSlides.length < 2) {
                gallery.querySelector('.content--controls').style.display = 'none';
                gallery.classList.add('gallery--single');
                return;
              }

              console.log(gallery, swiperContainer, swiperWrapper, swiperSlides, swiperSlidesPerView);

              new Swiper(swiperContainer, {
                modules: [Navigation, Autoplay],
                navigation: {
                  nextEl: gallery.querySelector('.swiper-button-next'),
                  prevEl: gallery.querySelector('.swiper-button-prev')
                },
                loop: true,
                slidesPerView: swiperSlidesPerView,
                spaceBetween: 25,
                breakpoints: {
                  0: {
                    slidesPerView: 1
                  },
                  768: {
                    slidesPerView: swiperSlidesPerView > 2 ? 2 : swiperSlidesPerView
                  },
                  1400: {
                    slidesPerView: swiperSlidesPerView
                  },
                }
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