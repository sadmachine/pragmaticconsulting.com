export function populateSelectField(
    value_field_selector,
    key_field_selector,
    value_options
) {
    var key = $(key_field_selector).val();
    var $el = $(value_field_selector);
    $el.empty();
    $.each(value_options[key], function(key, value) {
        var $option = $("<option></option>")
            .attr("value", value)
            .text(key);
        $el.append($option);
    });

    $(keyField).change(function() {
        var key = $(key_field_selector).val();
        var $el = $(value_field_selector);
        $el.empty();
        $.each(value_options[key], function(key, value) {
            var $option = $("<option></option>")
                .attr("value", value)
                .text(key);
            $el.append($option);
        });
    });
}

export function initCustomFileEvents() {
    $(".custom-file-input").change(function() {
        var $parent = $(this).parent();
        var $labelField = $parent.find(".custom-file-label");
        var textParts = $(this)
            .val()
            .split("/");
        if (textParts == $(this).val()) {
            var textParts = $(this)
                .val()
                .split("\\");
        }
        var labelText = textParts[textParts.length - 1];
        $labelField.html(labelText);
    });
}

export function setActiveNavLink() {
    $(".menu-item__link").each(function() {
        $(this).removeClass("active");
        $(this)
            .parent()
            .removeClass("active");
    });
    let $active_link = $('.menu-item__link[href="' + window.location + '"]');
    $active_link.addClass("active");
    $active_link.parent().addClass("active");
}

export function trimTextareas() {
    $("textarea").each(function() {
        $(this).html(
            $(this)
                .html()
                .trim()
        );
    });
}
