const el = document.querySelector("#quick-search");
const modal = tailwind.Modal.getOrCreateInstance(el);

// Define show global search event
document.onkeydown = function (evt) {
    if ((evt.ctrlKey || evt.metaKey) && evt.key === "k") {
        modal.show();
    }
};

// Set focus
$(el).on("shown.tw.modal", function () {
    $(el).find("input").first()[0].focus();
});

// Input search
$(el)
    .find("input")
    .first()
    .on("input", function (e) {
        $(".global-search__keyword").first().html(`"${e.target.value}"`);

        if (e.target.value.length > 3) {
            $(".global-search")
                .first()
                .removeClass("global-search--show-result");
        } else {
            $(".global-search").first().addClass("global-search--show-result");
        }
    });
