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

//     // Variables
//     var tabControl = $(selector).find(">.vts-tabs__control");
//     var clickedTab = $(selector).find(">.vts-tabs__control.active");
//     var tabWrapperContent = $(selector).next(".vts-tabs__content");
//     var activeTab =  tabWrapperContent.find('>.vts-tabs__content-tab.active');
//     var activeTabHeight = activeTab.outerHeight();
//
//     setTimeout(function(){
//       console.log($('[data-instance="vts-tabs--primary"] .vts-tabs__content-tab').first());
//       console.log($('[data-instance="vts-tabs--primary"] .vts-tabs__content-tab').first().outerHeight());
//
//       if(!isNested) {
//           tabWrapperContent.height($('[data-instance="vts-tabs--primary"] .vts-tabs__content-tab').first().outerHeight());
//       }
//     }, 1000)
//
//     // current closest active tab
//     var tabWrapperContent__closest = tabWrapperContent.closest('.vts-tabs__content');
//     var activeTabHeight__closest = $(selector).closest('.vts-tabs__content-tab.active').outerHeight();
//
// // console.log({
// //   tabControl: tabControl,
// //    clickedTab:  clickedTab, tabWrapperContent: tabWrapperContent, activeTab: activeTab, activeTabHeight:activeTabHeight});
//     // Show tab on page load
//     activeTab.show();
//
//     // Set height of wrapper on page load
//     // tabWrapperContent.height(500);
//
// // tabWrapperContent__closest.height(activeTabHeight__closest);
//     tabControl.on("click", function() {
//
//       // Remove class from active tab
//       tabControl.removeClass("active");
//
//       // Add class active to clicked tab
//       $(this).addClass("active");
//
//       // Update clickedTab variable
//       clickedTab = $(this);
//
//       // fade out active tab
//       activeTab.fadeOut(250, function() {
//
//         // Remove active class all content-tabs
//         $(tabWrapperContent).find('>.vts-tabs__content-tab').removeClass("active");
//
//         // Get index of clicked tab
//         var clickedTabIndex = clickedTab.index();
//
//         // Add class active to corresponding tab
//
//         $(tabWrapperContent).find('>.vts-tabs__content-tab').eq(clickedTabIndex).addClass("active");
//
//         // update new active tab
//         activeTab = $(tabWrapperContent).find('>.vts-tabs__content-tab.active');
//
//         // Update variable
//         activeTabHeight = activeTab.outerHeight();
//
//
//
//         // Animate height of wrapper to new tab height
//         tabWrapperContent.stop().delay(50).animate({
//           height: activeTabHeight
//         }, 500, function() {
//           // update curent closest
//           tabWrapperContent__closest = $(selector).closest('.vts-tabs__content-tab.active');
//           tabWrapperContent__closest_inner = tabWrapperContent.closest('.vts-tabs__content');
//
//
//           activeTabHeight__closest = tabWrapperContent__closest.outerHeight();
//           if(isNested) {
//             // Animate height of wrapper__closest if new nested tab is opend
//             // tabWrapperContent__closest_inner.stop().delay(50).animate({
//             //   height: activeTabHeight__closest
//             // }, 500, function() {
//             //   console.log('after udate', tabWrapperContent__closest.outerHeight());
//             // });
//             //
//             $('[data-instance="vts-tabs--primary"]').css({
//               height: activeTabHeight__closest + 'px'
//             })
//           }
//           // Fade in active tab
//           activeTab.delay(50).fadeIn(250);
//
//         });
//
//
//       });
//     });


}
