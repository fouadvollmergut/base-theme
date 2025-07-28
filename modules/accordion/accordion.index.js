document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('.accordion')) {
    import(/* webpackChunkName: "accordion" */ './assets/script')
      .then(({ default: Accordion }) => {
        document.querySelectorAll('.accordion').forEach(accordion => {
          new Accordion(accordion);
        });
      });
  }
});