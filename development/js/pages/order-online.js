// ----------------------------------------------------------------------------
// Actions for order-online page
// ----------------------------------------------------------------------------
//
function orderOnlineActions(){

  // ----------------------------------------------------------------------------
  // Step__slider
  // ----------------------------------------------------------------------------

  var step__slider = new Swiper('.step__slider .swiper-container', {
        //  prevButton: '.country-list__nav--prev',
        //  nextButton: '.country-list__nav--next',
         pagination: false,
         navigation: false,
         slidesPerView: 1,
         spaceBetween: 0,
         autoHeight: true,
         parallax: true,
         preventClicks: false

      });

  step__slider.disableTouchControl();


  function validateStepOnClick(selector, callback){

  		var $form = $("#order-online-form");

      var rules = {},
          messages = {};

      var namespaces = [ "user_surname", "user_name", "user_patronymic", "user_phone", "user_email", "birthday-date"];
      $.each(namespaces, function(i, value) {
          var $form_elements = $('input[name^="' + value + '"], textarea[name^="' + value + '"]', $form);

          $form_elements.each(function() {
              var elem_name = $(this).attr('name');
              var message;

              switch (value) {
                  case "user_surname":
                      message = "Укажите Вашу фамилию";
                      break;
                  case "user_name":
                      message = "Укажите Ваше имя";
                      break;
                  case "user_patronymic":
                      message = "Укажите Ваше отчество";
                      break;
                  case "user_phone":
                      message = "Укажите Ваш телефон";
                      break;
                  case "user_email":
                      message = "Укажите корректный email";
                      break;
                  case "birthday-date":
                      message = "Укажите дату Вашего рождения";
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
          ignore:":not(.swiper-slide-active input)",
          errorPlacement: function(error, element) {
             error.insertAfter($(element).next('label'));
         },
      });


  		if($form.valid() == true){
  			callback();
  		} else {
        step__slider.onResize();
      }

  }

  function preparePreviewData() {
    moment.locale('ru');
        //       TIMEZONES LIST https://github.com/moment/moment-timezone/blob/develop/data/packed/latest.json
    var now = moment().tz('Europe/Moscow').format('DD.MM.YYYY HH:mm:ss');

    var data_obj = {
      order_data: now, 
      order_number: 1211,
      user_surname: $('#user_surname').val(),
      user_name: $('#user_name').val(),
      user_patronymic: $('#user_patronymic').val(),
      user_phone: $('#user_phone').val(),
      user_email: $('#user_email').val(),
      selected_country: $('#geo-country option:selected').text(),
      purpose: $('[name=purpose]:checked').val(),
      accommodation: $('[name=accommodation]:checked').val(),
      accommodation_vts: $('#order-accomodation').val(),
      employment: $('[name=employment]:checked').val(),
      insurance: $('[name=insurance]:checked').val(),
      insurance_vts: $('#order-insurance').val(),
      marital_status: $('[name=marital_status]:checked').val(),
      adults: $('#adults').val(),
      children: $('#children').val(),
      birthday_date: $('#birthday-date').val()
    };

    var corresponded_obj = {
      order_data: $('#checkout__date'),
      order_number: $('#checkout__order-number'),
      user_surname: $('#checkout__surname'),
      user_name: $('#checkout__name'),
      user_patronymic: $('#checkout__patronymic'),
      user_phone: $('#checkout__phone'),
      user_email: $('#checkout__email'),
      selected_country: $('#checkout__selected-country'),
      purpose: $('#checkout__purpose'),
      accommodation: $('#checkout__accommodation'),
      accommodation_vts: $('#checkout__accommodation-vts'),
      employment: $('#checkout__employment'),
      insurance: $('#checkout__insurance'),
      insurance_vts: $('#checkout__insurance-vts'),
      marital_status: $('#checkout__marital-status'),
      adults: $('#checkout__adults'),
      children: $('#checkout__children'),
      birthday_date: $('#checkout__birthdate')
    };

    $.each(corresponded_obj, function (key, selector) {
        if(key == 'selected_country') {
          var selected_country_icon = $('#geo-country').val(),
              selected_country_icon_classname = 'flag-icon--' + selected_country_icon;
          $('#checkout__selected-country-icon').alterClass('flag-icon--*').addClass(selected_country_icon_classname);
          $(selector).text(data_obj[key]);
        }
        else {
          $(selector).text(data_obj[key]);
        }
    });

  }

  // ----------------------------------------------------------------------------
  // Prev / Next buttons navigation
  // ----------------------------------------------------------------------------
  $('.step__slide-prev,.step__slide-next').on('click', function (e) {
    e.preventDefault();
    var slideRefNum = +$(this).data('slide-ref-num');
    var slideRefName = $(this).data('slide-ref-name');
    var slideIndex = slideRefNum - 1;
    var $self = $(this);
    validateStepOnClick(this, function () {
        if(slideRefNum == 3) {
          preparePreviewData();
        }
        $('.step__identifier').fadeOut("slow", function(){
          $('#step__id',this).html(slideRefNum);
          $(this).fadeIn("slow");
        });
        $('.step__name').fadeOut("slow", function(){

          $('.step__name').html(slideRefName);
          $('.step__name').fadeIn("slow");
        });

        $('.swiper-slide').eq(slideIndex).find('fieldset').removeClass('hidden');
        step__slider.slideTo(slideIndex, 700);
        $('.swiper-slide').not('.swiper-slide-active').find('fieldset').addClass('hidden');

        if($self.hasClass('step__slide-prev')) {
          $('.step__progressbar-item').eq(slideIndex+1).removeClass('active');
        }
        $('.step__progressbar-item').eq(slideIndex).addClass('active');

        $("body,html").scrollTop($(".header-section--order").offset().top);
    });




  });


  // ----------------------------------------------------------------------------
  // Progressbar buttons actions
  // ----------------------------------------------------------------------------
  $('.step__progressbar-item').on('click', function (e) {
    e.preventDefault();
    var slideIndex = $(this).index();
    var slideRefNum = +$(this).data('slide-ref-num');
    var slideRefName = $(this).data('slide-ref-name');
    var $self = $(this);

    validateStepOnClick(this, function () {
        $('.step__identifier').fadeOut("slow", function(){
          $('#step__id',this).html(slideRefNum);
          $(this).fadeIn("slow");
        });
        $('.step__name').fadeOut("slow", function(){
          $('.step__name').html(slideRefName);
          $('.step__name').fadeIn("slow");
        });

        var lastActiveIndex = $('.step__progressbar-item.active').last().index();

        if(lastActiveIndex < slideIndex) {
          $self.prevAll().andSelf().addClass('active');
        } else if(lastActiveIndex > slideIndex) {
            $('.step__progressbar-item').eq(lastActiveIndex).prevAll().andSelf().slice(slideIndex + 1).removeClass('active');
        }

        $('.swiper-slide').eq(slideIndex).find('fieldset').removeClass('hidden');
        step__slider.slideTo(slideIndex, 700);
        $('.swiper-slide').not('.swiper-slide-active').find('fieldset').addClass('hidden');
    });

  });



// ----------------------------------------------------------------------------
// Upload actions
// ----------------------------------------------------------------------------

  $('.upload-form__drop .upload-form__btn').click(function(){
      // Simulate a click on the file input button
      // to show the file browser dialog

      $(this).parent('.upload-form__drop').find('.upload-form__input').click();
  });

  // Initialize the jQuery File Upload plugin (Multiple instances)
  $('.upload-form').each(function () {
      var ul = $(this).find('ul');
      $(this).fileupload({

            // This element will accept file drag/drop uploading
            dropZone: $(this).find('.upload-form__drop'),

            // This function is called when a file is added to the queue;
            // either via the browse button, or via drag/drop:
            add: function (e, data) {
                console.log('eeee0', e, data);
                var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                    ' data-fgColor="#24c279" data-readOnly="1" data-bgColor="#0055b0" /><p></p><span></span></li>');

                // Append the file name and file size
                tpl.find('p').text(data.files[0].name)
                             .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

                // Add the HTML to the UL element
                data.context = tpl.appendTo(ul);

                // Initialize the knob plugin
                tpl.find('input').knob();
                  step__slider.onResize();
                // Listen for clicks on the cancel icon
                tpl.find('span').click(function(){

                    if(tpl.hasClass('working')){
                        jqXHR.abort();
                    }

                    tpl.fadeOut(function(){
                        tpl.remove();
                          step__slider.onResize();
                    });

                });

                // Automatically upload the file once it is added to the queue
                var jqXHR = data.submit();
            },

            progress: function(e, data){

                // Calculate the completion percentage of the upload
                var progress = parseInt(data.loaded / data.total * 100, 10);

                // Update the hidden input field and trigger a change
                // so that the jQuery knob plugin knows to update the dial
                data.context.find('input').val(progress).change();

                if(progress == 100){
                    data.context.removeClass('working');
                }
            },

            fail:function(e, data){
                // Something has gone wrong!
                data.context.addClass('error');
            }

        }
      );
  });

  // Prevent the default action when a file is dropped on the window
  $(document).on('drop dragover', function (e) {
      e.preventDefault();
  });

  // Helper function that formats the file sizes
  function formatFileSize(bytes) {
      if (typeof bytes !== 'number') {
          return '';
      }

      if (bytes >= 1000000000) {
          return (bytes / 1000000000).toFixed(2) + ' GB';
      }

      if (bytes >= 1000000) {
          return (bytes / 1000000).toFixed(2) + ' MB';
      }

      return (bytes / 1000).toFixed(2) + ' KB';
  }


  // ----------------------------------------------------------------------------
  // Attach qtip to form questions
  // ----------------------------------------------------------------------------
      loadQTips('.question_form');

}
