// ----------------------------------------------------------------------------
// Scripts for Home page
// ----------------------------------------------------------------------------

// home parallax scene
var parallaxHomeScene = new ScrollMagic.Scene({
  triggerElement: '.parallax-section--home',
  duration: "200%",
  triggerHook: 1
})
.setTween('.parallax-section--home > .parallax-section__image', {y: "80%", ease: Linear.easeNone})
.addTo(scrollMagicController);
