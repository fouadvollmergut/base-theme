// Import style in favor of webpack bundle
import './assets/styles/style.scss';

import MobileMenu from './assets/scripts/mobile-menu/mobile-menu';

// Initialize
document.addEventListener('DOMContentLoaded', function() {

  // Import mobile menu script
  if (document.querySelector('header.mobile')) {
    const mobileMenu = new MobileMenu();
    mobileMenu.init();
  }

  // Import AOS for animations
  if (document.querySelector('[data-aos]')) {
    import(/* webpackChunkName: "aos-styles" */ 'aos/dist/aos.css');
    import(/* webpackChunkName: "aos" */ 'aos').then(({ default: AOS }) => {
      AOS.init({
        once: true,
        offset: 200,
        disable: 'mobile',
        duration: 400,
        easing: 'ease-in-out',
      });
    });
  }
});

// Import GDYMC module scripts
function importAll(r) {
  r.keys().forEach(r);
}

importAll(require.context('./modules/', true, /\.index\.js$/));