// Set theme color on page load
if (localStorage.getItem("theme-color") === null) {
    localStorage.setItem("theme-color", "default");
    $("html").attr("class", "default");
} else {
    $("html").attr("class", localStorage.getItem("theme-color"));
}

// Set active class on trigger element
$(`[data-theme-color='${localStorage.getItem("theme-color")}']`).addClass(
    "active"
);

// Change theme color action
$("[data-theme-color]").on("click", function () {
    localStorage.setItem("theme-color", $(this).attr("data-theme-color"));
    $("html").attr("class", $(this).attr("data-theme-color"));
    $("[data-theme-color]").removeClass("active");
    $(`[data-theme-color='${localStorage.getItem("theme-color")}']`).addClass(
        "active"
    );
});
