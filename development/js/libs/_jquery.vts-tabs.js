function vtsTabs() {

  /** on primary tabs **/
  $('.vts-tabs--primary .vts-tabs__control').on('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();

    var $nextContent = $('[data-instance="vts-tabs--primary"] > .vts-tabs__content-tab').eq(index);
    var $nextContentWrapper = $nextContent.find('>.vts-tabs__content-tab-wrapper');


    var primaryH = $('.vts-tabs--primary').outerHeight();

    new TimelineMax().to($('.vts-tabs__inner-panel'), 0.4, {
      autoAlpha: 0,
      onComplete: function () {

        $nextContent.addClass('active').siblings().removeClass('active');
        var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').eq(0).outerHeight();
        new TimelineMax()
        .to($('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper'), 0.4, {height: h+primaryH})
        .to($('.vts-tabs__inner-panel'), 0.4,{autoAlpha: 1}, '-=0.3');
    }});



  });


  /** on nested tabs **/
  $('.vts-tabs--nested .vts-tabs__control').on('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    if($(this).hasClass('active')) {
      return;
    }
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();

    var $nextContent = $(this).closest('.vts-tabs__inner-panel').find('[data-instance="vts-tabs--nested"] .vts-tabs__content-tab').eq(index);
    var primaryH = $('.vts-tabs--primary').outerHeight();

    new TimelineMax().to($('.vts-tabs__inner-panel .vts-tabs__content'), 0.2, {
      autoAlpha: 0,
      x: -20,
      onComplete: function () {
        $nextContent.addClass('active').siblings().removeClass('active');
        var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').outerHeight();
        new TimelineMax()
        .to($('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper'), 0.4, {height: h+primaryH})
        .fromTo($('.vts-tabs__inner-panel .vts-tabs__content'), 0.4, {x: 20},{x: 0, autoAlpha: 1}, '-=0.5');
    }});


  })

  function ajustVtsTabsHeight() {
    var primaryH = $('.vts-tabs--primary').outerHeight();
    var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').outerHeight();
    $('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper').css({height: h+primaryH + 'px'});
  }
  $(window).on('resize', $.throttle(250, ajustVtsTabsHeight));
  $(window).on('orientationchange', ajustVtsTabsHeight);

}
