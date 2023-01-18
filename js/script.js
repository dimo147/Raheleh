let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000);
}

let tl = gsap.timeline({defaults: {ease: "inOut", duration: 1}})

tl.to(".animE", {"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)", "opacity": 1, y: 0, stagger: 0.2})
tl.to(".anim1", {"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)", "opacity": 1, y: 0, stagger: 0.2})

gsap.to(".anim2", {
    scrollTrigger: ".anim2",
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    stagger: 0.2,
    duration: 1,
    delay: 0.7,
});

gsap.to(".anim3", {
    scrollTrigger: {
        trigger: ".anim3",
        toggleActions: "play none none none",
    },
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    stagger: 0.2,
    duration: 1,
    delay: 0.7,
});

gsap.to(".anim4", {
    scrollTrigger: {
        trigger: ".anim4",
        toggleActions: "play none none none",
    },
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    stagger: 0.2,
    duration: 1,
    delay: 0.7,
});

gsap.to(".anim5", {
    scrollTrigger: {
        trigger: ".anim5",
        toggleActions: "play none none none",
    },
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    stagger: 0.2,
    duration: 1,
    delay: 0,
});
