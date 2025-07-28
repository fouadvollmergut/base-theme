class Accordion {
  constructor (element) {
    this.disable = element.classList.contains('disabled');
    this.content = element.querySelector('.accordion-container');
    this.triggers = this.content.querySelectorAll('.accordion-header');

    if (this.disable) {
      return;
    }

    this.init();
  }

  init () {
    this.triggers[0].classList.add('accordion--open');
    
    this.triggers.forEach(trigger => {
      trigger.addEventListener('click', this.toggleAccordion.bind(this));
    });
  }

  toggleAccordion (event) {
    const element = event.target;

    this.closeAll();
    element.classList.add('accordion--open');
  }

  closeAll () {
    this.triggers.forEach(element => {
      if (element.classList.contains('accordion--open')) {
        element.classList.remove('accordion--open');
      }
    });
  }
}

export default Accordion;