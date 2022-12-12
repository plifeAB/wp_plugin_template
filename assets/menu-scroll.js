jQuery(document).ready(function ($) {
    $("#menu-item-107").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".sek-module-inner").offset().top -200
        }, 200);
    });
});
