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
  lastKnownScrollPosition = window.scrollY + 160
  
  const milestone = document.querySelector('.milestones') ? document.querySelector('.milestones') : ''
  const loadMilestone = milestone.offsetTop < lastKnownScrollPosition

  if(loadMilestone){
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

const actualBtn = document.querySelector('.wpcf7-file');
const fileChosen = document.getElementById('file-chosen');

if(actualBtn) {
  actualBtn.addEventListener('change', function(){
    fileChosen.textContent = this.files[0].name
  })
}

const elms = document.querySelectorAll(".boldFirstWord");
elms.forEach((el, i) => {
  str = el.innerText;
  const removeSpaces = str.split(" ");
  let firstWord = removeSpaces[0];

  firstWord = str.replace(firstWord, '<strong>$&</strong>');
  el.innerHTML = firstWord;
})