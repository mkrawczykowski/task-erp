document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.getElementById('js-hamburger');
  const mainNav = document.getElementById('js-main-nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mainNav.classList.toggle('active');
    if (hamburger.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
      // document.body.style.position = 'fixed';
      document.body.style.paddingRight = '8px';

    }
    if (!hamburger.classList.contains('active')) {
      document.body.style.removeProperty('overflow');
      document.body.style.paddingRight = '0';
    }

  });
});