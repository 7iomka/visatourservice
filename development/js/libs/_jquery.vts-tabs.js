function vtsTabs() {

    // Variables
    var clickedTab = $(".vts-tabs__control.active");
    var tabWrapper = $(".vts-tabs__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".vts-tabs__control").on("click", function() {

      // Remove class from active tab
      $(".vts-tabs__control").removeClass("active");

      // Add class active to clicked tab
      $(this).addClass("active");

      // Update clickedTab variable
      clickedTab = $(".vts-tabs__control.active");

      // fade out active tab
      activeTab.fadeOut(250, function() {

        // Remove active class all tabs
        $(".vts-tabs__content-tab").removeClass("active");

        // Get index of clicked tab
        var clickedTabIndex = clickedTab.index();

        // Add class active to corresponding tab
        $(".vts-tabs__content-tab").eq(clickedTabIndex).addClass("active");

        // update new active tab
        activeTab = $(".vts-tabs__content-tab.active");

        // Update variable
        activeTabHeight = activeTab.outerHeight();

        // Animate height of wrapper to new tab height
        tabWrapper.stop().delay(50).animate({
          height: activeTabHeight
        }, 500, function() {

          // Fade in active tab
          activeTab.delay(50).fadeIn(250);

        });
      });
    });


}
