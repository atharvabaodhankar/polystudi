// Swiper JS

var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 30,
  // centeredSlides: true,
  loop: true,
  fade: "true",
  speed: 1000,
  slidesPerGroupSkip: 10,
  grabCursor: true,
  autoplayDisableOnInteraction: true,
  autoplay: {
    enabled: true,
    delay: 5000,
  },
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 30,
    },
    650: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 60,
    },
    1200: {
      slidesPerView: 3,
      slidesPerGroup: 3,
      spaceBetween: 40,
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
});

//  GSAP Syllabus
gsap.from(".sy-h1", {
  y: 100,
  duration: 1.2,
  opacity: 0,
  rotation: -45,
  scrollTrigger: {
    trigger: ".sy-h1",
    scroller: "body",
    start: "top 45%",
  },
});
gsap.from(".syllabus-main", {
  y: 100,
  duration: 1.7,
  delay:1,
  opacity: 0,
  scrollTrigger: {
    trigger: ".sy-h1",
    scroller: "body",
    start: "top 45%",
  },
});
//  GSAP Manuals
gsap.from(".m-h1", {
  y: 100,
  duration: 1.2,
  opacity: 0,
  rotation: -45,
  scrollTrigger: {
    trigger: ".m-h1",
    scroller: "body",
    start: "top 45%",
  },
});
gsap.from(".slide-container", {
  duration: 1.2,
  opacity: 0,
  scale:0.8,
  delay:1,
  scrollTrigger: {
    trigger: ".m-h1",
    scroller: "body",
    start: "top 45%",
  },
});
//  GSAP Solved Papers
gsap.from(".sp-h1", {
  y: 100,
  duration: 1.2,
  opacity: 0,
  rotation: -45,
  scrollTrigger: {
    trigger: ".sp-h1",
    scroller: "body",
    start: "top 50%",
  },
});
gsap.from(".solvedpapers-main", {
  y: 100,
  duration: 1.7,
  delay:1,
  opacity: 0,
  scrollTrigger: {
    trigger: ".sp-h1",
    scroller: "body",
    start: "top 50%",
  },
});

//  GSAP Notes

gsap.from(".n-h1", {
  y: 100,
  duration: 1.2,
  opacity: 0,
  rotation: -45,
  scrollTrigger: {
    trigger: ".n-h1",
    scroller: "body",
    start: "top 50%",
  },
});

gsap.from(".notes-main ", {
 opacity:0,
  delay: 1,
  scale:0,
  stagger: .8,
  duration:2,
  scrollTrigger: {
    trigger: ".n-h1",
    scroller: "body",
    start: "top 50%",
  },
});