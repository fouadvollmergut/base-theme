// Import style in favor of webpack bundle
import './assets/styles/style.scss';

import MobileMenu from './assets/scripts/mobile-menu/mobile-menu';

// Initialize
document.addEventListener('DOMContentLoaded', function() {

  // Import mobile menu script
  if ("ontouchstart" in document.documentElement) {
    if (document.querySelector('header.mobile')) {
      const mobileMenu = new MobileMenu();
      mobileMenu.init();
    }
  }
});