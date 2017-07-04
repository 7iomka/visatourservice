// ----------------------------------------------------------------------------
// Scripts for All pages (common scripts)
// ----------------------------------------------------------------------------

jQuery(document).ready(function($) {
  var $window = $(window),
      $body = $('body'),
      isLessThen768 = false;
      isLessThen960 = false;



  //init TimelineMax
  var tl = new TimelineMax();
  // Init Controller of ScrollMagic
  var scrollMagicController = new ScrollMagic.Controller({
      // addIndicators: true
  });



  // Modernizr max-width
  function maxWidthCss(max) {
      return Modernizr.mq('(max-width: ' + max + 'px)');
  }


  // ------------------------------------------------------------------
  // All resize events
  // ------------------------------------------------------------------

  $window.on('resize', $.throttle(250, checkWidth)).trigger('resize');
  $window.on('orientationchange', checkWidth);
  function checkWidth() {
    if (maxWidthCss(767)) {
      isLessThen768 = true;
    }
    else {
      isLessThen768 = false;
    }
    if (maxWidthCss(959)) {
      isLessThen960 = true;
    }
    else {
      isLessThen960 = false;
    }

  }



  // ------------------------------------------------------------------
  // Wawes material effect initialization to all buttons
  // ------------------------------------------------------------------
  Waves.attach('.btn', ['waves-circle', 'waves-float']);
  Waves.init();

  // ------------------------------------------------------------------
  // Convert all the links with the progress-button class to
  // actual buttons with progress meters.
  // ------------------------------------------------------------------
  $('.progress-button').progressInitialize();

  // ----------------------------------------------------------------------------
  // Menu
  // ----------------------------------------------------------------------------
  // On click show menu on small screen

    $('body').addClass('js');
      var $menu = $('#menu'),
        $nav = $("#header-nav"),
        $menuHamburger = $('.hamburger'),
        $menuLink = $('.menu__item a', $menu);

      // toggle hamburger
      $menuHamburger.click(function() {
        $menuHamburger.toggleClass('active');
        $menu.toggleClass('active');
        return false;
      });

      // // goToTarget
      // $menuLink.on('click', function (e) {
      //   e.preventDefault();
      //   if($menuHamburger.hasClass('active')) {
      //     $menuHamburger.add($menu).removeClass('active');
      //   }
      //   goToTarget($(this).attr('href'));
      // })
      //
      // function goToTarget(target) {
      //     var target = target || "#home";
      //
      //     var offset = isLessThen960 ? 60 : 43;
      //     console.log(offset);
      //
      //     if (isMobile.apple.device || is_android_default_bro) {
      //         $('html, body').animate({
      //             scrollTop: $(target).offset().top - offset
      //         }, 400);
      //         return;
      //
      //     }
      //     TweenMax.to(window, 1.5, {
      //         scrollTo: {
      //             y: target,
      //             offsetY: offset
      //         },
      //         ease: Expo.easeInOut
      //     })
      // }




  // ------------------------------------------------------------------
  // flatpickr initialisate
  // ------------------------------------------------------------------
  /** localise global **/
  Flatpickr.localize(Flatpickr.l10ns.ru);

  /** Basic ininialisation **/
//  var datetime_picker = flatpickr(".flatpickr", {
//       enableTime: true,
//       // defaultDate: Math.floor(Date.now() / 1000),
//       // create an extra input solely for display purposes
//       // altInput: true,
//       // altFormat: "F j, Y h:i",
//       dateFormat: "d.m.Y  H:i",
//       defaultDate: new Date(),
//       // utc: true
//       time_24hr: true
//   });

 var time_picker = flatpickr(".flatpickr--time-only", {
      // enableTime: false,
      // defaultDate: Math.floor(Date.now() / 1000),
      // create an extra input solely for display purposes
      // altInput: true,
      // altFormat: "F j, Y h:i",
      dateFormat: "H:i",
      defaultDate: new Date(),
      noCalendar: true,
      time_24hr: true,
      enableTime: true,
      // utc: true
      // time_24hr: true
  });
 var date_picker = flatpickr(".flatpickr--calendar-only", {
      // enableTime: false,
      // defaultDate: Math.floor(Date.now() / 1000),
      // create an extra input solely for display purposes
      // altInput: true,
      // altFormat: "F j, Y h:i",
      dateFormat: "d.m.Y",
      defaultDate: new Date(),
      // utc: true
      // time_24hr: true
  });

  // ------------------------------------------------------------------
  // Global initialise input number with controls
  // ------------------------------------------------------------------
  $('[data-trigger="spinner"]').spinner();

  // ------------------------------------------------------------------

  // ------------------------------------------------------------------
  // Global initialise sumoselect selectbox
  // ------------------------------------------------------------------
  $('.sumoselect').each(function() {
    var params = {};
    if($(this).hasClass('sumoselect--search')) {
      params.search = true;
      params.noMatch = 'Не найдено "{0}"';

    }
    if($(this).hasClass('site-form__selectbox--geopoint')) {
      params.searchText = 'Выберите филиал';
    }
    if($(this).hasClass('site-form__selectbox--geocountry')) {
      params.searchText = 'Выберите страну';
    }

    $(this).SumoSelect(params);

  });


  // ------------------------------------------------------------------
  // Global qtip function
  // ------------------------------------------------------------------
  /**
   * loadQTips
   * @param  {jQuery string} selector [description]
   */
  function loadQTips(selector) {

      var isFixed = true,
          my = 'center left',
          at = 'center right',
          viewport = $('body'),
          method = 'shift none',
          offsetX = 0,
          offsetY = 0;

        if(isMobile.any || Modernizr.touchevents) {
          isFixed = false;
          my = 'bottom left';
          at = 'bottom right';
          viewport = $('calculator__steps__line');
          method = 'flip flip';
          offsetX = -5;
          offsetY = -10;
        }
      $(selector).each(function() {

           $(this).qtip({
              style: {
                  classes: 'qtip-bootstrap',
                  tip: {
                      border: 2,
                      width: 19,
                      height: 13,
                  }
              },


              show: {
                  // solo: true,
                  solo: $('.qtips'),
                  effect: function() {
                      $(this).slideDown();
                  }
              },
              hide: {
                  fixed: isFixed,
                  delay: 300,
                  effect: function() {
                      $(this).fadeOut();
                  },
                  // event: false
              },
              position: {
                  my: my, // Position my top left...
                  at: at,
                  //  viewport: $(this).closest('.step'),
                  //  target: $(document),
                  viewport: viewport,
                  adjust: {
                      method: method,
                      x: offsetX,
                      y: offsetY,
                      resize: true // Can be ommited (e.g. default behaviour)

                      /*  mouse: false,*/
                  }

              },
              content: {
                  title: $(this).find('.qtip_title'),
                  text: $(this).find('.qtip_description'),
                  button: true
              },
              events: {
                  show: function(event, api) {
                  }
              }


          });
          });


  }


  // ------------------------------------------------------------------
  // Global floated labels for forms
  // ------------------------------------------------------------------
  function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass('active');
				}
			});
		});
  }
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");


  // ------------------------------------------------------------------


  // SETTINGS FOR ALL FORMS INSIDE REMODAL
  // ------------------------------------------------------------------
  $('.remodal--action').each(function() {
      var $context = $(this),
          $form = $(this).find('form'),
          task = $context.find('.form_task').val();

          $form.submit(function(e) {
              e.preventDefault();
          });

      var rules = {},
          messages = {};

      var namespaces = ["user_name", "user_phone", "user_email", "user_site"];
      $.each(namespaces, function(i, value) {
          var $form_elements = $('input[name^="' + value + '"], textarea[name^="' + value + '"]', $form);

          $form_elements.each(function() {
              var elem_name = $(this).attr('name');
              var message;

              switch (value) {
                  case "user_name":
                      message = "Заполните Ваше имя";
                      break;
                  case "user_phone":
                      message = "Не указан телефон";
                      break;
                  case "user_email":
                      message = "Укажите корректный email";
                      break;
                  case "user_site":
                      message = "Укажите адрес сайта";
                      break;
                  default:
                      message = "Заполните данное поле";
                      break;
              }
              rules[elem_name] = {
                  required: true
              };
              if (value === 'user_phone') {
                  $('input[name^="' + value + '"]').mask("+7 (999) 999 99 99");
                  rules[elem_name].usPhoneFormat = true;
              }
              messages[elem_name] = {
                  required: message
              }

          });

      })
      // console.log(rules, messages);
      $form.validate({
          rules: rules,
          messages: messages,
           ignore:'input[type="date"],input[type="time"]',
          submitHandler: function(form) {
              submitRemodalForm(form, $context, task);
          },
          errorPlacement: function(error, element) {
             error.insertAfter($(element).next('label'));
         },
      });

  });
  function submitRemodalForm(form, $context, task) {
      /**
       * formPopupNumberId - is way to identify what type of form is present form - callback or baseOrder
       */

      var $form = $(form),
          $progressBtn = $('.progress-button', $form);
      /*  prepare serialized array for the addition of a form type identifier  */
      var form_data = $form.serializeFormJSON();
      console.log(form_data);

          $.ajax({
              url: '/ajax.php',
              type: 'POST',
              data: form_data,
              dataType: 'json',
              cache: false,
              beforeSend: function(r) {
                    $progressBtn.prop('disabled', true).progressSet(97);

              }
          }).always(function(r) {

          }).done(function(r) {
              // alert('done');
              console.log(r);

              $form.trigger('reset');
              $progressBtn.progressSet(100);
              setTimeout(function () {

                $progressBtn.prop('disabled', false).removeClass('finished');

              },3000);

          }).fail(function(request, textStatus, errorThrown) {
              // alert('fail');
              console.log(request.responseText);
              console.log(textStatus);
              console.log(errorThrown);
          });



  };





if($('.home-banner').length) {
  homeActions(scrollMagicController);
}

/** Actions for each inner page **/
var $mainContainer = $('main.page');

if($mainContainer.hasClass('page--visa-c-country')) {
  visa_c_countryActions();
}
if($mainContainer.hasClass('page--order-online')) {
  orderOnlineActions(loadQTips);
}
if($mainContainer.hasClass('page--passports-registration')) {
  passports_registrationActions();
}
if($mainContainer.hasClass('page--about')) {
  aboutActions();
}

if($mainContainer.hasClass('page--insurance')) {
  isuranceActions();
}





// close jQuery document ready
});
