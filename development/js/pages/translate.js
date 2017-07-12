// ----------------------------------------------------------------------------
// Scripts for translate page
// ----------------------------------------------------------------------------
//
function translateActions(){


   if($('.accordion--parent').length) {
     $('.accordion').not('.accordion--nested').each(function () {
       var config = {
         speed: 350,
         classList: {
           item: '.accordion__item--parent',
           control: '.accordion__control--parent',
           toggler: '.accordion__toggler--parent',
           panel: '.accordion__panel--parent',
         }
       };
       $(this).accordion(config);

     });
   }

   if($('.accordion--nested')) {
     $('.accordion--nested').each(function () {
       var config = {
         speed: 450,
         classList: {
           item: '.accordion__item--nested',
           control: '.accordion__control--nested',
           toggler: '.accordion__toggler--nested',
           panel: '.accordion__panel--nested',
         }
       };
       $(this).accordion(config);
     });
   }

}
