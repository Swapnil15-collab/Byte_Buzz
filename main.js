// Changing navbar styles on scroll
window.addEventListener('scroll', () => {
  document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0);
});

// Show and hide FAQ functionality
const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
  faq.addEventListener('click', () => {
      faq.classList.toggle('open');

      // Change icon
      const icon = faq.querySelector('.faq__icon i');
      if (icon.className === 'uil uil-plus') {
          icon.className = 'uil uil-minus';
      } else {
          icon.className = 'uil uil-plus';
      }
  });
});





console.log("faqs is declared: ", typeof faqs !== "undefined");




















// Initialize Swiper
const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView:1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints:{
      600:{
        slidesPerView:1,
      }
    }
});








