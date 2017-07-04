// ----------------------------------------------------------------------------
// Scripts for passports registration page
// ----------------------------------------------------------------------------

function isuranceActions(){
/**
 * Go initialize VTS tabs component
 */

console.log('is insurance')

// $('.documents-list__grid').masonry({
//   // options
//   itemSelector: '.documents-list__grid-item',
//   columnWidth: '.documents-list__grid-item'
// });
//

  if($('.accordion').length) {
    $('.accordion').each(function () {
      var config = {
        speed: 350,
      };
      $(this).accordion(config);

    })
  }


}
