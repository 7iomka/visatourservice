function vtsTabs(selector, isNested) {

    // Variables
    var tabControl = $(selector).find(">.vts-tabs__control");
    var clickedTab = $(selector).find(">.vts-tabs__control.active");
    var tabWrapper = $(selector).siblings(".vts-tabs__content");
    var activeTab =  tabWrapper.find('>.vts-tabs__content-tab.active');
    var activeTabHeight = activeTab.outerHeight();

    // current closest active tab
    var tabWrapper__closest = tabWrapper.closest('.vts-tabs__content');
    var activeTabHeight__closest = tabWrapper__closest.outerHeight();

console.log({
  tabControl: tabControl,
   clickedTab:  clickedTab, tabWrapper: tabWrapper, activeTab: activeTab, activeTabHeight:activeTabHeight});
    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);
// tabWrapper__closest.height(activeTabHeight__closest);
    tabControl.on("click", function() {

      // Remove class from active tab
      tabControl.removeClass("active");

      // Add class active to clicked tab
      $(this).addClass("active");

      // Update clickedTab variable
      clickedTab = $(selector).find(">.vts-tabs__control.active");

      // fade out active tab
      activeTab.fadeOut(250, function() {

        // Remove active class all content-tabs
        $(tabWrapper).find('>.vts-tabs__content-tab').removeClass("active");

        // Get index of clicked tab
        var clickedTabIndex = clickedTab.index();

        // Add class active to corresponding tab

        $(tabWrapper).find('>.vts-tabs__content-tab').eq(clickedTabIndex).addClass("active");

        // update new active tab
        activeTab = $(tabWrapper).find('>.vts-tabs__content-tab.active');

        // Update variable
        activeTabHeight = activeTab.outerHeight();



        // Animate height of wrapper to new tab height
        tabWrapper.stop().delay(50).animate({
          height: activeTabHeight
        }, 500, function() {
          // update curent closest
          tabWrapper__closest = tabWrapper.closest('.vts-tabs__content');
          console.log('before udate', tabWrapper__closest.outerHeight());
          activeTabHeight__closest = tabWrapper__closest.outerHeight();
          if(isNested) {
            // Animate height of wrapper__closest if new nested tab is opend
            tabWrapper__closest.stop().delay(50).animate({
              height: activeTabHeight__closest
            }, 500, function() {
              console.log(activeTabHeight__closest)
console.log('after udate', tabWrapper__closest.outerHeight());
            });
          }
          // Fade in active tab
          activeTab.delay(50).fadeIn(250);

        });


      });
    });


}
