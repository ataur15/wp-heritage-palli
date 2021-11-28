; (function ($) {

   "use strict";

   $(document).on('ready', function () {
      // Mobile Menu
      $('#navmenu').meanmenu({
         meanMenuContainer: '.mobile-menu',
         meanScreenWidth: "767"
      });

      // Accordion Nav Menu
      let span = "<span></span>";
      $('#navmenu > ul > li:has(ul)').append(span);
      $('#navmenu > ul > li:has(ul)').addClass("has-sub");
      $('#navmenu > ul > li > a').click(function () {

         var checkElement = $(this).next();

         $('#navmenu li').removeClass('active');
         $(this).closest('li').addClass('active');

         if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
         }

         if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#navmenu ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
         }

         if (checkElement.is('ul')) {
            return false;
         } else {
            return true;
         }
      });

   });

}(jQuery));
