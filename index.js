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
});

// Import GDYMC module scripts
function importAll(r) {
  r.keys().forEach(r);
}

importAll(require.context('./modules/', true, /\.index\.js$/));