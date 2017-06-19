function vtsTabs() {
  var $primaryTabs = $('.vts-tabs--primary');
  var $primaryTabsControl = $primaryTabs.find('.vts-tabs__control');
  var $wrapper = $('.vts-tabs__wrapper');
  var $group = $wrapper.find('.vts-tabs__group');

  // Modernizr max-width
  function maxWidthCss(max) {
      return Modernizr.mq('(max-width: ' + max + 'px)');
  }
  /** on primary tabs **/
  $primaryTabsControl.on('click', function(e){

    e.preventDefault();
    e.stopPropagation();
    primaryTabsOnClick($(this));
  });

  function primaryTabsOnClick($control, tabIndex){

      var $this = $control || $(this);
      var index = $this.index();
      // если передали параметров индекс таба
      var tabIndex = tabIndex || 0;
      var primaryH = $primaryTabs.outerHeight();
      // if nested tabs is located in outside group
      if($group){


        var $groupItem = $wrapper.find('.vts-tabs__group-item');
        var $currentGroupItem = $groupItem.eq(index);

        // add active class to first group item control

       $currentGroupItem.find('.vts-tabs__control').eq(tabIndex).addClass('active').siblings().removeClass('active');

        // remove active class from another primary control
        $groupItem.not($currentGroupItem).find('.vts-tabs__control').removeClass('active');

        // если это мобильные
        if(maxWidthCss(543)){
          $currentGroupItem.fadeIn(1200);
          $groupItem.not($currentGroupItem).hide();
        }
      }

      // add class to primary tabs control
      $this.addClass('active').siblings().removeClass('active');

      if($group){

        var $currentParentContentTab = $('[data-instance="vts-tabs--primary"] > .vts-tabs__content-tab').eq(index);
        var $currentContentTab = $currentParentContentTab.find('.vts-tabs__content-tab').eq(tabIndex);

        var $currentContentTabWrapper = $currentContentTab.find('>.vts-tabs__content-tab-wrapper');
        var $currentContentTabInnerPanel = $currentParentContentTab.find('.vts-tabs__inner-panel');
      }
      else {
        var $currentContentTab = $('[data-instance="vts-tabs--primary"] > .vts-tabs__content-tab').eq(index);
        var $currentContentTabWrapper = $currentContentTab .find('>.vts-tabs__content-tab-wrapper');
        var $currentContentTabInnerPanel = $currentContentTabWrapper.find('.vts-tabs__inner-panel');
      }



      // скрываем панель с внутренним таб-контентом (Например: взрослые / дети)
      new TimelineMax().to($currentContentTabInnerPanel, 0.4, {
        autoAlpha: 0,
        onComplete: function () {

          $currentContentTab.addClass('active').siblings().removeClass('active');
          var h;
          if($group){
            $currentParentContentTab.addClass('active').siblings().removeClass('active');
            // прибавляем к первоначальной высоте ещё и высоту группы
            primaryH += $group.outerHeight();
            h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').outerHeight();
          } else {
              h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').eq(tabIndex).outerHeight();
          }



          new TimelineMax()
          .to($wrapper, 0.4, {height: h+primaryH})
          .to($currentContentTabInnerPanel, 0.4,{autoAlpha: 1}, '-=0.3');
      }});






  }

  /** on nested tabs **/
  $('.vts-tabs--nested .vts-tabs__control').on('click', function(e){

    e.preventDefault();
    e.stopPropagation();

    if($(this).hasClass('active')) {
      return;
    }

    if($group.length) {
      console.log('that is with group');

      $(this).addClass('active').siblings().removeClass('active');
      // получаем индекс родительского group-item
      var parentIndex = $(this).closest('.vts-tabs__group-item').index();
      // получаем инлекс самого контрола
      var index = $(this).index();

      // получаем элемент родительской группы
      var $parentGroupItem = $(this).closest('.vts-tabs__group-item');

      // получаем родительский контрол первого уровня соответствующий индексу родительской группы
      var $parentPrimaryTabsControl = $primaryTabsControl.eq($parentGroupItem.index());

      // var $parentPrimaryTabsControlIndex = $parentPrimaryTabsControl.index();

      // если у родитеслького контрола 1 уровня нет активного класса - кликнуть по нему
      // (выполнить функцию в которую передать сам родительский контрол и индекс текущего контрола)
      if(!$parentPrimaryTabsControl.hasClass('active')) {
        primaryTabsOnClick($parentPrimaryTabsControl, index);
        return;
      }


      var $currentParentContentTab = $('[data-instance="vts-tabs--primary"] > .vts-tabs__content-tab').eq(parentIndex);

      var $currentContentTab = $currentParentContentTab.find('.vts-tabs__content-tab').eq(index);

      var $currentContentTabInnerPanel = $currentContentTab.closest('.vts-tabs__inner-panel');
      var $currentContentTabInnerPanelContent = $currentContentTabInnerPanel.find('.vts-tabs__content')


      var primaryH = $primaryTabs.outerHeight();
      new TimelineMax().to($currentContentTabInnerPanelContent, 0.2, {
        autoAlpha: 0,
        x: -20,
        onComplete: function () {
          $currentContentTab.addClass('active').siblings().removeClass('active');
          if ($group) {
            // прибавляем к первоначальной высоте ещё и высоту группы
            primaryH += $group.outerHeight();
          }
          var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').outerHeight();
          new TimelineMax()
          .to($wrapper, 0.4, {height: h+primaryH})
          .fromTo($currentContentTabInnerPanelContent, 0.4, {x: 20},{x: 0, autoAlpha: 1}, '-=0.5');

      }});

    }
    else {

      $(this).addClass('active').siblings().removeClass('active');
      var index = $(this).index();

      var $nextContent = $(this).closest('.vts-tabs__inner-panel').find('[data-instance="vts-tabs--nested"] .vts-tabs__content-tab').eq(index);
      var primaryH = $primaryTabs.outerHeight();

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


    }





  })

  function ajustVtsTabsHeight() {
    var primaryH = $('.vts-tabs--primary').outerHeight();
    if ($group) {
      // прибавляем к первоначальной высоте ещё и высоту группы
      primaryH += $group.outerHeight();
    }
    var h = $('[data-instance="vts-tabs--primary"]').find('>.vts-tabs__content-tab.active').outerHeight();

    $('[data-instance="vts-tabs--primary"]').closest('.vts-tabs__wrapper').css({height: h+primaryH + 'px'});
  }

  function mobileToggleGroupItem(){
      var $groupItem = $wrapper.find('.vts-tabs__group-item');
      var $activeGroupItem = $groupItem.find('.vts-tabs__control.active').closest('.vts-tabs__group-item');
    // если это мобильные
    if(maxWidthCss(543)){
      $activeGroupItem.fadeIn(1200);
      $groupItem.not($activeGroupItem).hide();
    } else {
      $groupItem.show();
    }
  }
  $(window).on('resize', $.throttle(250, function () {
    ajustVtsTabsHeight();
    mobileToggleGroupItem();
  })).trigger('resize');
  $(window).on('orientationchange', function () {
    ajustVtsTabsHeight();
    mobileToggleGroupItem();
  });

}
