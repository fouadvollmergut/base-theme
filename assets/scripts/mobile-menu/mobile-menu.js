const MobileMenu = class {
  constructor() {
    this.body = document.body;
    this.menu = document.querySelector('header.mobile');
    this.menuButton = document.querySelector('header.mobile .mobile-menu-trigger');
  }

  init() {
    this.menuButton.addEventListener('click', this.toggleMenu.bind(this));
    this.body.addEventListener('click', this.closeMenu.bind(this));
  }

  toggleMenu() {
    this.menu.classList.toggle('mobile-menu--open');
    this.menuButton.classList.toggle('close');
    this.body.classList.toggle('mobile-menu--open');
  }

  closeMenu(e) {
    if (e.target.closest('header.mobile')) return;

    this.menu.classList.remove('mobile-menu--open');
    this.menuButton.classList.remove('close');
    this.body.classList.remove('mobile-menu--open');
  }
};

export default MobileMenu;