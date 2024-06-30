jQuery(document).ready(function () {
  const firstView = document.querySelector(".js-first-view");
  const buttonPrev = document.querySelector(".js-button-prev");
  const buttonNext = document.querySelector(".js-button-next");
  const pagination = document.querySelector(".js-pagination");
  const tl = gsap.timeline();

  tl.fromTo(firstView, 2, { width: "100%" }, { width: "100%", ease: "power2.easeInOut" })
    .fromTo(firstView, 2, { opacity: "0" }, { opacity: "1", ease: "power2.easeInOut" })
    .fromTo(buttonPrev, 2, { left: "0px", opacity: "0" }, { left: "15px", opacity: "1", ease: "power2.easeInOut" })
    .fromTo(buttonNext, 2, { right: "0px", opacity: "0" }, { right: "15px", opacity: "1", ease: "power2.easeInOut" }, "-=2")
    .fromTo(pagination, 2, { bottom: "0px", opacity: "0" }, { bottom: "15px", opacity: "1", ease: "power2.easeInOut" }, "-=2");
});
