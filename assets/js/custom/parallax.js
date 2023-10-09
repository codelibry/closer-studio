document.addEventListener("DOMContentLoaded", function (event) {
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".hero").forEach(function (container) {
    let image = container.querySelector("img");

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: container,
        scrub: true,
        pin: false,
      },
    });

    tl.from(image, {
      yPercent: -50,
      ease: "none",
    }).to(image, {
      yPercent: 50,
      ease: "none",
    });
  });
});
