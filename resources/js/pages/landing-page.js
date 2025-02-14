(function () {
    "use strict";

    // Background
    const backgroundMode = () => {
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            $(".background").first().addClass("background--hidden");
        } else {
            $(".background").first().removeClass("background--hidden");
        }
    };

    // Showcase
    const showcase = () => {
        if (
            document.body.scrollTop > 100 ||
            document.documentElement.scrollTop > 100
        ) {
            $(".landing-page").first().addClass("landing-page--scrolled");
        } else {
            $(".landing-page").first().removeClass("landing-page--scrolled");
        }
    };

    backgroundMode();
    window.onscroll = () => {
        backgroundMode();
        showcase();
    };

    // Smooth scroll
    $("html").addClass("scroll-smooth");

    // Groups
    $("[data-link-group]").on("click", function (e) {
        e.preventDefault();
        $("[data-group]").removeClass("active");
        $("[data-link-group]").removeClass("active");
        $(`[data-group="${$(this).data("link-group")}"]`).addClass("active");
        $(this).addClass("active");
    });
})();
