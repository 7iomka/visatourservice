// ----------------------------------------------------------------------------
// Scripts for Home page
// ----------------------------------------------------------------------------
function homeActions() {

    /**
     * parallaxHomeScene
     * @type {ScrollMagic}
     */
    var parallaxHomeScene = new ScrollMagic.Scene({
      triggerElement: '.parallax-section--home',
      duration: "200%",
      triggerHook: 1
    })
    .setTween('.parallax-section--home > .parallax-section__image', {y: "65%", ease: Linear.easeNone})
    .addTo(scrollMagicController);


    /**
     * parallax for sections
     * @type {ScrollMagic}
     */
    var parallaxHomeScene = new ScrollMagic.Scene({
      triggerElement: '.visa-long-term',
      duration: "200%",
      triggerHook: 1,
      offset: -75
    })
    .setTween('.visa-long-term> .parallax-section__image', {y: "-10%", ease: Linear.easeNone})
    .addTo(scrollMagicController);


    /**
     * insertData__visa_c as callback for ajax query
     */
    function insertData__visa_c(category_slug, country_name, country_code){
        var countryBlock = $(
          [
            '<div class="swiper-slide country-list__slide">',
              '<div class="country-block">',
                  '<div class="country-label">',
                    '<span title="' + country_name + '" alt="' + country_name + '" class="flag-icon flag-icon--squared flag-icon--' + country_code + ' country-icon" data-category=' + category_slug + '></span>',
                    '<span class="country-name" title="' + country_name + '">' + country_name + '</span>',
                  '</div>',
                  '<div class="country-action-panel">',
                    '<a class="coutry-action-link"><i class="icon icon--preview coutry-action-link-icon"></i>Предпросмотр</a>',
                    '<a href="/visa-c/' + country_code + '" class="coutry-action-link"><i class="icon icon--readmore coutry-action-link-icon"></i>Перейти к оформлению</a>',
                  '</div>',
              '</div>',
            '</div>'
          ].join('')
        );
        $('.country-list__slider .swiper-wrapper').append(countryBlock);


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
     * getDataCountriesC
     * @param  {Array} data
     * @param  {function} callback
     */
    function getDataCountries(data, callback) {

      var catergoriesArr = data; // array of objects

      // for each country object
      $.each(catergoriesArr, function(index, category) {

        var category_slug = category.c, // get country category name
            category_items = category.i, // get country category items (countries object)
            total_categories = category_items.length; // get num of items in category

          // for each item we will create coutry-block
          for (var i = 0; i < total_categories; i++) {
            var country = category_items[i],
                country_name = country.n, // get country name
                country_code = country.c; // get country code

                if(typeof callback !== 'function') {
                  callback = function(){
                    console.log('please, turn callback function in getDataCountries')
                  };
                }
                // transfer necessary parametrs to callback func
                callback(category_slug, country_name, country_code);

          }
        });


        $('.country-block').click(function () {
          $('.country-block.active').removeClass('active');
          $(this).addClass('active');
        })
        // ----------------------------------------------------------------------------
        // Country slider
        // ----------------------------------------------------------------------------
        var countrySlider = new Swiper('.country-list__slider .swiper-container', {
               prevButton: '.country-list__nav--prev',
               nextButton: '.country-list__nav--next',
               pagination: '.swiper-pagination',
               slidesPerView: 4,
               slidesPerColumn: 2,
               slidesPerColumnFill: 'column',
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


    }




      /**
       * Get countries data for visa c
       */
      $.ajax({
          url: 'js/json/countries-c.json', type: "GET", dataType: 'json',
          // cache: true, // <-- turn ON on production
      }).done(function(jsonData) {

          getDataCountries(jsonData, insertData__visa_c);

      }).fail(function(request, textStatus, errorThrown) {
          // console.log(request.responseText);
          // console.log(textStatus);
          // console.log(errorThrown);
      }).always(function() {
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



      Waves.attach('.country-list__nav', ['waves-circle', 'waves-float']);


      /**
       *
       * all (except fi, se)
       */



      /**
       * safari and old browsers than not support @supports css
       */
       if ('webkitFlexWrap' in document.documentElement.style) {
           document.documentElement.classList.add('supports-flex-wrap');
       }


// End home actions
}
