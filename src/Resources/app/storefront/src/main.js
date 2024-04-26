$(document).on("scroll", function(){
    if ($(document).scrollTop() > 100){
        window.setTimeout(function () {
            $(".topdata-top-finder-pro-container").addClass("remove");
            $(".header-logo-main-img").addClass("logo-shrink");
            $(".header-logo-main").addClass("logo-shrink1");
            $(".header-main").addClass("navi-shrink");
        }, 10);

    } else {
        window.setTimeout(function () {
            $(".header-logo-main-img").removeClass("logo-shrink");
            $(".header-logo-main").removeClass("logo-shrink1");
            $(".topdata-top-finder-pro-container").removeClass("remove");
            $(".header-main").removeClass("navi-shrink");
        }, 10);
    }

});

