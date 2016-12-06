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
     * Get countries data for visa c
     */
    $.ajax({
        url: 'js/json/countries-c.json', type: "GET", dataType: 'json',
        // cache: true, // <-- turn ON on production
    }).done(function(jsonData) {
        getDataCountriesC(jsonData);

    }).fail(function(request, textStatus, errorThrown) {
        // console.log(request.responseText);
        // console.log(textStatus);
        // console.log(errorThrown);
    }).always(function() {
        // console.log('always')
    });


    /**
     * getDataCountriesC
     * @param  {Array} data
     */
    function getDataCountriesC(data) {

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

          var countryBlock = $(
            [
              '<div class="swiper-slide country-list__slide">',
                '<div class="country-block">',
                    '<div class="country-label">',
                      '<span title="' + country_name + '" alt="' + country_name + '" class="flag-icon flag-icon--' + country_code + ' country-icon" data-category=' + category_slug + '></span>',
                      '<span class="country-name" title="' + country_name + '">' + country_name + '</span>',
                    '</div>',
                    '<div class="country-action-panel">',
                      '<a class="coutry-action-link"><i class="icon icon--preview coutry-action-link-icon"></i>Предпросмотр</a>',
                      '<a href="/visa-c/' + country_code + '" class="coutry-action-link"><i class="icon icon--enter coutry-action-link-icon"></i>Перейти к оформлению</a>',
                    '</div>',
                '</div>',
              '</div>'
            ].join('')
          );
          $('.country-list__slider .swiper-wrapper').append(countryBlock);

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

        Waves.attach('.country-list__nav', ['waves-circle', 'waves-float']);





// End home actions
}
