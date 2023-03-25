(function ($) {
    "use strict";

    var fullHeight = function () {
        $(".js-fullheight").css("height", $(window).height());
        $(window).resize(function () {
            $(".js-fullheight").css("height", $(window).height());
        });
    };
    fullHeight();

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("active");
    });
})(jQuery);

$(".change-setting-key").on("change", function (e) {
    let value = this.options[this.selectedIndex].value;
    if (value == "image") {
        $(".display-text-value").addClass("d-none");
        $(".display-image-value").removeClass("d-none");
    }
});
