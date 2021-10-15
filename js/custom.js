var swiper = new Swiper(".swiper-testimonials", {
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".swiper-partners", {
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  paginationClickable: true,
  centeredSlides: true,
  autoHeight: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
      autoHeight: false,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 5,
    },
  },
});

document.addEventListener('scroll', function() {
  lastKnownScrollPosition = window.scrollY + 150;
  const milestone = document.querySelector('.milestones').offsetTop < lastKnownScrollPosition

  if(milestone){
    const counters = document.querySelectorAll('.counter-value');
    const speed = 2000;

    counters.forEach( counter => {
      const animate = () => {
        const value = +counter.getAttribute('data-count');
        const data = +counter.innerText;
        
        const time = value / speed;
        if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        } else {
          counter.innerText = value;
        }     
      }   
      animate();
    });
  }
})
