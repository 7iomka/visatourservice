(function($) {                                    // Use $ as variable name
  $.fn.accordion = function (options) {        // Return the jQuery selection

    // Defaults settings
    var defaults = {
        // These are the defaults.
        classList: {
          item: '.accordion__item',
          control: '.accordion__contol',
          toggler: '.accordion__toggler',
          panel: '.accordion__panel',
        },
        activeClass: 'active',
        speed: 400,
        collapse: true,
        toggleText: false,
        togglerDefaultText: 'Expand',
        togglerOpenedText: 'Roll up',
        toggleClass: false,
        togglerOpenedClass: '',
        togglerDefaultClass: '',
    }

    // This is the easiest way to have default options.
    var settings = $.extend(defaults, options );
    var self = this;
    // Bind events on each control
    this.on('click', settings.classList.control, function (e) {
      e.preventDefault();

      // toggler element inside the control
      var $toggler = $(this).find(settings.classList.toggler);
      // parent of the control - item element
      var $parentItem = $(this).closest(settings.classList.item);

      /** Change text for toggler **/
      if($parentItem.hasClass(settings.activeClass)) {
        if(settings.toggleText){
          $toggler.text(settings.togglerDefaultText);
        }
        if(settings.toggleClass){
          $toggler.removeClass(settings.togglerDefaultClass);
          $toggler.addClass(settings.togglerOpenedClass);
        }
      }
      else {
        if(settings.toggleText){
          $toggler.text(settings.togglerOpenedText);
        }
        if(settings.toggleClass){
          $toggler.removeClass(settings.togglerOpenedClass);
          $toggler.addClass(settings.togglerDefaultClass);
        }
      }

      // for active item toggle class (for css animation of content inside panel)
      $parentItem.toggleClass(settings.activeClass);

      // toggle with animation panel
      $(this).next(settings.classList.panel).slideToggle(settings.speed);

      // if collapse enabled
      if(settings.collapse) {
        var $anotherItems = $(settings.classList.item + '.' + settings.activeClass, self).not($parentItem);
        $anotherItems.removeClass(settings.activeClass);
        $anotherItems.find(settings.classList.panel).slideToggle(settings.speed);
        if(settings.toggleText){
          $anotherItems.find(settings.classList.toggler).text(settings.togglerDefaultText)
        }

      }


    });

    return this;    // Return the jQuery selection
  };

  // default initialisation
  // $(function () {
  //   if($('.accordion').length) {
  //     $('.accordion').each(function () {
  //       var config = {
  //         speed: 350
  //       };
  //       if($(this).hasClass('accordion--collaps_false')) {
  //         config.collapse = false;
  //       }
  //       $(this).accordion(config);
  //
  //     })
  //   }
  // })
}(jQuery)); // Pass in jQUery object
