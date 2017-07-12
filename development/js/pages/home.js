// ----------------------------------------------------------------------------
// Scripts for Home page
// ----------------------------------------------------------------------------
function homeActions(scrollMagicController) {

    /**
     * parallaxHomeScene
     * @type {ScrollMagic}
     */
     if(!Modernizr.touchevents){
       var parallaxHomeScene = new ScrollMagic.Scene({
         triggerElement: '.parallax-section--home',
         duration: "200%",
         triggerHook: 1
       })
           .setTween('.parallax-section--home > .parallax-section__image', {y: "65%", ease: Linear.easeNone})
           .addTo(scrollMagicController);
     }



    /**
     * parallax for sections
     * @type {ScrollMagic}
     */
    // var parallaxHomeScene = new ScrollMagic.Scene({
    //   triggerElement: '.visa-long-term',
    //   duration: "200%",
    //   triggerHook: 1,
    //   offset: -75
    // })
    // .setTween('.visa-long-term> .parallax-section__image', {y: "-10%", ease: Linear.easeNone})
    // .addTo(scrollMagicController);

    var json__visa_c = [];
    var arrayOfCountryNames__visa_c = [];
    var coutriesDataObject__vica_c = {};
    var arrayOfCountryNames__visa_d = [];

    /**
     * insertData__visa_c as callback for ajax query
     */
    function insertData__visa_c(category_slug, country_name, country_code, notFound){
        var countryBlock;

        if(notFound) {
          countryBlock = [
            '<p class="results-not-found"> По Вашему запросу ничего не найдено.</p>'
          ].join('');
          $('.country-list__slider .swiper-wrapper').html(countryBlock);

        } else {
          $('.country-list__slider .results-not-found').remove();
          countryBlock = $(
            [
              '<div class="swiper-slide country-list__slide" data-country="' + country_name + '" data-category=' + category_slug + '>',
                '<div class="country-block">',
                    '<div class="country-label">',
                      '<span title="' + country_name + '" alt="' + country_name + '" class="flag-icon flag-icon--squared flag-icon--' + country_code + ' country-icon" ></span>',
                      '<span class="country-name" title="' + country_name + '">' + country_name + '</span>',
                    '</div>',
                    '<div class="country-action-panel">',
                      '<div class="country-action-header">',
                        '<span title="' + country_name + '" alt="' + country_name + '" class="flag-icon flag-icon--squared flag-icon--' + country_code + ' coutry-action-header-icon" ></span>',
                        '<span class="country-action-header-text">' + country_name + '</span>',
                      '</div>',
                      '<div class="country-action-content">',
                        '<a class="coutry-action-link coutry-action-preview"><i class="icon icon--preview coutry-action-link-icon"></i>Предпросмотр</a>',
                        '<a href="/visa-c/' + country_code + '" class="coutry-action-link"><i class="icon icon--readmore coutry-action-link-icon"></i>Перейти к оформлению</a>',
                      '</div>',
                    '</div>',
                '</div>',
              '</div>'
            ].join('')
          );
          $('.country-list__slider .swiper-wrapper').append(countryBlock);

        }

    }


    /**
     * insertData__visa_d as callback for ajax query
     */
    function insertData__visa_d(category_slug, country_name, country_code){

      var countryBlock = $(
        [
          '<div class="country-block visa-long__country-block">',
            '<div class="country-label visa-long__country-label">',
              '<a href="/visa-d/' + country_code + '" class="visa-long__country-link">',
                  '<span title="' + country_name + '" alt="' + country_name + '" class="flag-icon flag-icon--' + country_code + ' country-icon visa-long__country-icon" data-category=' + category_slug + '></span>',
                  '<span class="country-name visa-long__country-name" title="' + country_name + '">' + country_name + '</span>',
              '</a>',
            '</div>',
        '</div>'
        ].join('')
      );
      $('.visa-long__countries-table').append(countryBlock);
    }


    /**
     * insertData__visa_d as callback for ajax query
     */
    function pushCountryName(category_slug, country_name, country_code, arr){
      if (!isArray(arr)) return;
      arr.push(country_name);
    }


    /**
     * Find country from specific category in json array,
     * and pass category_slug country_name and country_code to callback
     */
    function findCountry(country, arr, callback) {
      country = country.toLowerCase();
      callback = callback || function () {};

      var category_slug, country_name, country_code;
      var notFound = true;
      // select category
        var result = arr.forEach(function(catObj){
          // check each country
            catObj.i.forEach(function(countryObj, num) {
                  countryFound = (countryObj.n.toLowerCase() === country);
                  if(countryFound) {
                    notFound = false;
                    category_slug = catObj.c;
                    country_name = countryObj.n;
                    country_code = countryObj.c;
                  }
            });
        });


      callback(category_slug, country_name, country_code, notFound);
    }

    /**
     * Find countries from specific category in json array
     */
     function findCountriesFromCategory(category, arr, callbackForEachItem) {

       // find category
       var resultCategory = arr.filter(function(obj){
         return obj.c === category;
       });
       var resultCategoryCountries = resultCategory[0].i;
       var category_slug = resultCategory.c;

       console.log(resultCategoryCountries);

       if(typeof(callbackForEachItem) === 'function') {
          var country_name, country_code;
         resultCategoryCountries.forEach(function (country) {
           country_name = country.n;
           country_code = country.c;
           callbackForEachItem(category_slug, country_name, country_code);
         })
       }

     }


    /**
     * getDataCountriesC
     * @param  {Array} data
     * @param  {function} callback
     */
    function getDataCountries(data, callbackForEachItem, postActions) {

      var catergoriesArr = data; // array of objects

      var allCategories = [];
      var allCountryNames = [];
      var allCountyCodes = [];

      var coutriesDataObject = {
        allCategories: allCategories,
        allCountryNames: allCountryNames,
        allCountyCodes: allCountyCodes
      };

      // for each country object
      $.each(catergoriesArr, function(index, category) {

        var category_slug = category.c, // get country category name
            category_items = category.i, // get country category items (countries object)
            total_categories = category_items.length; // get num of items in category


        /**
         * 1 - push category
         */
         allCategories.push(category_slug); // 1

          // for each item we will create coutry-block
          for (var i = 0; i < total_categories; i++) {
            var country = category_items[i],
                country_name = country.n, // get country name
                country_code = country.c; // get country code

                /**
                 * 2 - push country name
                 * 3 - push country code
                 */
                 allCountryNames.push(country_name); // 2
                 allCountyCodes.push(country_code); // 3

                if(typeof callbackForEachItem !== 'undefined'){
                    if(typeof callbackForEachItem !== 'function') {
                      callbackForEachItem = function(){
                        console.log('please, turn `callbackForEachItem` function in getDataCountries')
                      };
                    }
                    // transfer necessary parametrs to callback func
                    callbackForEachItem(category_slug, country_name, country_code);
                }


          }
        });

        /** finally actions **/
        if(typeof postActions === 'function') {
          postActions(coutriesDataObject);
        }



    }

      /**
       * Get countries data for visa c
       */
      $.ajax({
          url: 'js/json/countries-c.json', type: "GET", dataType: 'json',
          // cache: true, // <-- turn ON on production
      })
      .done(function(jsonData) {
          json__visa_c = jsonData;
          getDataCountries(jsonData, insertData__visa_c, function (coutriesDataObject) {

            coutriesDataObject__visa_c = coutriesDataObject;
            arrayOfCountryNames__visa_c = coutriesDataObject.allCountryNames;


                    // ----------------------------------------------------------------------------
                    // Country slider
                    // ----------------------------------------------------------------------------
                    var countrySlider__visa_c = new Swiper('.visa-short__slider .swiper-container', {
                           prevButton: '.country-list__nav--prev',
                           nextButton: '.country-list__nav--next',
                           pagination: false,
                           slidesPerView: 4,
                           slidesPerColumn: 2,
                           slidesPerColumnFill: 'row',
                           paginationClickable: true,
                           spaceBetween: 10,
                           // Small screens, center to align and loop elements
                           breakpoints: {
                             1199: {
                               slidesPerView: 3,
                             },
                             900: {
                                slidesPerView: 2
                             },
                             480: {
                                slidesPerView: 1
                             }
                           }
                        });

                    /** Bind some events for each slide and content inside it**/
                    function bindEventsOnEachSlide__visa_c() {
                      /**
                       * Expand actions-links for each country
                       */
                      $('.visa-short__slider .country-block').click(function () {
                        $('.visa-short__slider .country-block.active').removeClass('active');
                        $(this).addClass('active');
                      });

                      /**
                       * Bind event for action-link with preview functionality
                       */
                      $('.coutry-action-preview').on('click', function (e) {
                          e.preventDefault();
                          e.stopPropagation();

                          if($('.country-preview').is('visible')){
                            $('.country-preview').fadeOut(1000).fadeIn(1000).afterTransition(function () {
                              /** call get data func**/
                            })
                          }
                          else {
                            $('.country-preview').slideUp(200).slideDown(1500).afterTransition(function () {
                              /** call get data func**/
                            });
                          }

                      });
                    }

                    var mobileTogglerInitialized = false;
                    $('.search-form__tips-toggler').on('click', function(){
                      $('.search-form__tips').slideToggle();
                      mobileTogglerInitialized = true;
                    });



                    // ----------------------------------------------------------------------------
                    // Search actions
                    // ----------------------------------------------------------------------------
                    function updateSearchResults(result, arr, findFunction, action_callback, sliderInstance) {
                      sliderInstance.removeAllSlides();
                      findFunction(result, arr, action_callback);
                      sliderInstance.update(true);
                      /** rebind events on new DOM elements **/
                      bindEventsOnEachSlide__visa_c();
                    }


                    function typehead_cancelEvents(arr, actionFunc, action_callback, sliderInstance) {
                      /** remove active form-tip **/
                      $('.visa-short__search-form-tip.active').removeClass('active');
                      /** remove all slides **/
                      sliderInstance.removeAllSlides();
                      /** call action function **/
                      actionFunc(arr, action_callback);
                      /** need to update slider settings **/
                      sliderInstance.update(true);
                      /** re-bind all events on new slides **/
                      bindEventsOnEachSlide__visa_c();
                    }


                    $.typeahead({
                       input: '.visa-short__input',
                       minLength: 2,
                       maxItem: 20,
                       order: "asc",
                       hint: true,
                      //  dynamic: true,
                      emptyTemplate: "Такой страны не существует: {{query}}",
                       backdrop: {
                           "background-color": "#000000",
                           "opacity": "0.15",
                           "filter": "alpha(opacity=15)"
                       },
                       accent: true,
                       searchOnFocus: false,
                       source: {
                           data: arrayOfCountryNames__visa_c
                       },
                       callback: {
                           onInit: function (node) {
                               console.log('Typeahead Initiated on ' + node.selector);
                               bindEventsOnEachSlide__visa_c();

                           },
                           onClickAfter (node, a, item, event) {
                                updateSearchResults(item.display, json__visa_c, findCountry, insertData__visa_c, countrySlider__visa_c);
                           },
                           onCancel (node, event) {
                                typehead_cancelEvents(jsonData, getDataCountries, insertData__visa_c, countrySlider__visa_c);
                                // you can also check for ESC, backspace, ctrl+x and bind different actions... the callback gets called when there was text inside the input and it gets cleared


                           },
                          onNavigateAfter (node, lis, a, item, query, event) {
                            console.log('onNavigateAfter ', item)
                          },
                          onSearch (node, query) {
                            if(!query.length) {
                              /** button close is clicked **/
                              typehead_cancelEvents(jsonData, getDataCountries, insertData__visa_c, countrySlider__visa_c);
                            }
                          },
                          onSubmit (node, form, item, event) {
                            event.preventDefault();
                            var countryName;
                            /** item.display async check **/
                            if(typeof item.display === 'undefined') {
                              countryName = $('.visa-short__input').val().toLowerCase();
                            } else {
                              countryName = item.display.toLowerCase();
                            }

                            updateSearchResults(countryName, json__visa_c, findCountry, insertData__visa_c, countrySlider__visa_c);


                          }

                       },


                    });
                    var mobileTogglerInitialized = false;
                    $('.search-form__tips-toggler').on('click', function(){
                      $('.search-form__tips').slideToggle();
                      mobileTogglerInitialized = true;
                    });
                    // ----------------------------------------------------------------------------
                    // Search form-tips actions (search by category)
                    // ----------------------------------------------------------------------------
                    $('.visa-short__search-form-tip').on('click', function () {
                      if(mobileTogglerInitialized) {
                          console.log("loolololo")
                          TweenMax.to(window, 1.5, {
                              scrollTo: {
                                  y: $('.visa-short__slider'),
                              },
                              ease: Expo.easeInOut
                          });
                      }
                      $('.visa-short__search-form-tip.active').removeClass('active');
                      $(this).addClass('active');
                      var category_slug = $(this).data('category');
                      updateSearchResults(category_slug, json__visa_c, findCountriesFromCategory, insertData__visa_c, countrySlider__visa_c);

                    })
          });

      })
      .fail(function(request, textStatus, errorThrown) {
          // console.log(request.responseText);
          // console.log(textStatus);
          // console.log(errorThrown);
      })
      .always(function() {
          // console.log('always')
      });


      /**
       * Get countries data for visa c
       */
      $.ajax({
          url: 'js/json/countries-d.json', type: "GET", dataType: 'json',
          // cache: true, // <-- turn ON on production
      }).done(function(jsonData) {
          getDataCountries(jsonData, insertData__visa_d);

      }).fail(function(request, textStatus, errorThrown) {
          // console.log(request.responseText);
          // console.log(textStatus);
          // console.log(errorThrown);
      }).always(function() {
          // console.log('always')
      });


      /** Wawes effect attach to slider nav **/
      Waves.attach('.country-list__nav', ['waves-circle', 'waves-float']);


      /** request visa online **/
      $('.get_request_visa_online').on('click', function (e) {
        $('[data-remodal-id="get_request_visa_online"]').find('.form_subject').val($(this).data('subject'));
      })


      /**
       *
       * all (except fi, se)
       */

       // ----------------------------------------------------------------------------
       // Testimonials
       // ----------------------------------------------------------------------------
       var testimonialSlider = new Swiper('.testimonials__slider .swiper-container', {
           pagination: '.testimonials__slider .swiper-pagination',
           slidesPerView: 3,
           paginationClickable: true,
           spaceBetween: 10,
           // Small screens, center to align and loop elements
           breakpoints: {
             900: {
                slidesPerView: 2
             },
             640: {
                slidesPerView: 1
             }
           }
       });


       // ----------------------------------------------------------------------------
       // Certificates
       // ----------------------------------------------------------------------------
       var testimonialSlider = new Swiper('.certificates__slider .swiper-container', {
           pagination: '.certificates__slider .swiper-pagination',
           slidesPerView: 3,
           paginationClickable: true,
           spaceBetween: 70,
           // Small screens, center to align and loop elements
           breakpoints: {
             900: {
                slidesPerView: 2
             },
             640: {
                slidesPerView: 1
             }
           }
       });
       // ----------------------------------------------------------------------------
       // Init gallery for each certificate
       // ----------------------------------------------------------------------------
       var certificatesGalleryScene = $('.certificates__gallery').lightGallery({
            // selectWithin: $('.certificate'),
            selector: ".certificate__link",
            hash: false,
            download: false,
            thumbnail:true,
             animateThumb: false,
             showThumbByDefault: false
        });

        // ----------------------------------------------------------------------------
        // Home map settings
        // ----------------------------------------------------------------------------


      /**
       * safari and old browsers than not support @supports css
       */
       if ('webkitFlexWrap' in document.documentElement.style) {
           document.documentElement.classList.add('supports-flex-wrap');
       }


// End home actions
}
