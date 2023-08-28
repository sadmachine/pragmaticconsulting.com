try {
    window.$ = window.jQuery = require("jquery");
    window.bootstrap = require("bootstrap");
    window.popper = require("popper.js");
    require("./admin/prevent-resubmission");
    require("./admin/verify-on-delete");
    window.utils = require("./admin/utils");
} catch (e) {}

$(function() {
    // Trim whitespace from all textareas
    utils.trimTextareas();
    //utils.setActiveNavLink();
});
