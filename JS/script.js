// var loader = document.querySelector(".loader-wrapper");

//       window.addEventListener("load", function () {
//         loader.style.opacity = 0;
//         loader.style.visibility = "hidden";
// });
var loaderAnimation = gsap.timeline();

loaderAnimation.to(".loader-container", {
  width: "auto",
  duration: 0.7,
  ease: "power2.inOut",
});
loaderAnimation.to(".loader-container h1", {
  color: "white",
});

loaderAnimation.to(
  ".loader-box",
  {
    y: "-100%",
    stagger: 0.2,
    delay: 1.2,
  },
  "start"
);
loaderAnimation.to(
  ".loader-main",
  {
    opacity: 0,
    delay: 1.2,
  },
  "start"
);
loaderAnimation.to(".loader-wrapper", {
  x: "-100%",
});

// Scroll Navbar

window.addEventListener("scroll", () => {
  if (scrollY > 600) {
    document.body.classList.add("sticky");
  } else {
    document.body.classList.remove("sticky");
  }
});

// Menu and Navbar

var menu = document.querySelector(".menu-btn");
const navBtns = document.querySelectorAll(".nav-btn");
var nav = document.querySelector("#nav");

menu.addEventListener("click", () => {
  menu.classList.toggle("active");
  nav.classList.toggle("active");
});

navBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    menu.classList.remove("active");
    nav.classList.remove("active");
  });
});

// Shery.mouseFollower({
//   skew: true,
//   ease: "cubic-bezier(0.23, 1, 0.320, 1)",
//   duration: 0.2,
// });

Shery.makeMagnet(".magnet");

// Hero page GSAP

// var heroAnimate = gsap.timeline();
setTimeout(function () {
  Shery.textAnimate(".hero-h1", {
    style: 2,
    y: 10,
    duration: 2,
    ease: "cubic-bezier(0.13, 1, 0.320, 1)",
    multiplier: 0.1,
  });
}, 2000);

loaderAnimation.from(
  ".heroShow-divs",
  {
    y: -100,
    opacity: 0,
    stagger: 0.4,
    duration: 1,
  },
  "hero-start"
);

loaderAnimation.from(".nav-ul li", {
  y: -100,
  stagger: 0.2,
  duration: 0.7,
});

loaderAnimation.from(
  ".hero-div-main h3",
  {
    x: -100,
    duration: 1.3,
    opacity: 0,
    stagger: 1.2,
  },
  "hero-start"
);
loaderAnimation.from(
  ".hero-div-main p",
  {
    y: 100,
    duration: 1.4,
    opacity: 0,
  },
  "hero-start"
);

// Courses GSAP

gsap.from(".ch-h1", {
  x: 300,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".ch-h1",
    scroller: "body",
    start: "top 40%",
  },
});
gsap.from(".course-box ul li", {
  x: 300,
  duration: 1.2,
  opacity: 0,
  delay: 0.5,
  stagger: 0.4,
  ease: "expo.out",
  scrollTrigger: {
    trigger: ".course-box ul li",
    scroller: "body",
    start: "top 55%",
  },
});
gsap.from(".course-box ul h1", {
  y: -50,
  duration: 1.2,
  opacity: 0,
  delay: 0.2,
  stagger: 0.4,
  scrollTrigger: {
    trigger: ".course-box ul h1",
    scroller: "body",
    start: "top 50%",
  },
});

// About Us GSAP

gsap.from(".au-h1", {
  x: 100,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".au-h1",

    scroller: "body",
    start: "top 40%",
  },
});
gsap.from(".aboutus-box", {
  y: -200,
  scale: 0,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".aboutus-box",
    scroller: "body",
    // markers:"true",
    start: "top 65%",
    end: "bottom 40%",
    scrub: 2,
  },
});

// Contact Us GSAP

gsap.from(".cu-h1", {
  x: 100,
  opacity: 0,
  duration: 1.2,
  scrollTrigger: {
    trigger: ".cu-h1",
    scroller: "body",
    start: "top 30%",
  },
});
gsap.from(".contact-form", {
  y: 100,
  opacity: 0,
  rotate: 10,
  delay: 0.7,
  duration: 1.2,
  scrollTrigger: {
    trigger: ".contact-form",
    scroller: "body",
    // markers: "true",
    start: "top 45%",
  },
});

// Footer GSAP

gsap.from(".footer-animate", {
  y: 100,
  opacity: 0,
  delay: 0.7,
  duration: 1.2,
  scrollTrigger: {
    trigger: ".footer-animate",
    scroller: "body",
    // markers:"true",
    start: "top 80%",
  },
  stagger: 0.5,
  ease: "expo.out",
});

let MenuAnimateFix = gsap.matchMedia();

MenuAnimateFix.add("(max-width: 500px)", () => {
  gsap.to(".nav-ul li", {
    none,
  });
});

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
    // dynamicBullets: true,
  },
});
