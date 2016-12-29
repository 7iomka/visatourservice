function vtsTabs(selector, isNested) {

  /** on primary tabs **/
  $('#vts-tabs--primary .vts-tabs__control').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();
    var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').eq(0).outerHeight();
    var $nextContent = $('[data-instance="vts-tabs--primary"] > .vts-tabs__content-tab').eq(index);
    var $nextContentWrapper = $nextContent.find('>.vts-tabs__content-tab-wrapper');
    $nextContent.addClass('active').siblings().removeClass('active');

    new TimelineMax()
    // .to($nextContentWrapper, 0.25, {
    //   opacity: 0,
    //   onComplete: function(){
    //
    //   },
    //   // onCompleteParams: [currentModel]
    //  })
    .to($('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper'), 1, {height: h+50})
    // .to($nextContentWrapper, 0.5, {opacity: 1});

  });


  /** on nested tabs **/
  $('#vts-tabs--nested .vts-tabs__control').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();
    var h = $('[data-instance="vts-tabs--primary"]').find('.vts-tabs__content-tab.active').eq(0).outerHeight();
    var $nextContent = $('[data-instance="vts-tabs--nested"] .vts-tabs__content-tab').eq(index)
    $nextContent.addClass('active').siblings().removeClass('active')

    TweenMax.to($('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper'), 1, {height: h+50})
  })




}
