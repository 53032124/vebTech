(function ($) {
    "use strict";

    /**************************************
     TOOLTIP
     **************************************/

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    /**************************************
     BACK TO TOP
     **************************************/
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.dmtop').css({bottom: "25px"});
        } else {
            jQuery('.dmtop').css({bottom: "-100px"});
        }
    });
    jQuery('.dmtop').click(function () {
        jQuery('html, body').animate({scrollTop: '0px'}, 250);
        return false;
    });


})(jQuery);