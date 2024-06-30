// jQuery(document).ready(function () {

window.onload = function () {
  const loading = document.querySelector(".p-loading__bg");
  const firstView = document.querySelector(".js-first-view");
  const skills = document.querySelector(".js-skills");
  const slide = document.querySelector(".js-slide");
  const explanation = document.querySelector(".js-explanation");
  const buttonPrev = document.querySelector(".js-button-prev");
  const buttonNext = document.querySelector(".js-button-next");
  const pagination = document.querySelector(".js-pagination");
  const tl = gsap.timeline();

  tl.fromTo(loading, 1, { x: "0" }, { x: "0", ease: "power2.easeInOut" })
    .fromTo(loading, 1, { x: "0" }, { x: "100%", ease: "power2.easeInOut" })
    .fromTo(firstView, 0.5, { opacity: "0" }, { opacity: "1" })
    .fromTo(skills, 0.5, { opacity: "0" }, { opacity: "1" }, "-=0.5")
    .fromTo(slide, 1, { scale: "0" }, { scale: "1", ease: "power2.easeInOut" })
    .fromTo(explanation, 0.5, { x: "-10%", opacity: "0" }, { x: "0", opacity: "1", ease: "power2.easeInOut" }, "-=0.5")
    .fromTo(buttonPrev, 0.3, { left: "0px", opacity: "0" }, { left: "15px", opacity: "1", ease: "power2.easeInOut" })
    .fromTo(buttonNext, 0.3, { right: "0px", opacity: "0" }, { right: "15px", opacity: "1", ease: "power2.easeInOut" })
    .fromTo(pagination, 0.5, { x: "-10%", opacity: "0" }, { x: "0", opacity: "1", ease: "power2.easeInOut" })
    .fromTo(loading, 1, { display: "block" }, { display: "none" });
};
