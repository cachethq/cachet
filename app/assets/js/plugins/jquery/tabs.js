/**
 * jQuery Tab Plugin
 */
$.fn.tabs = function(options) {
    // Default Settings
    var settings = $.extend({
        state: "active",
        active: 1,
    }, options );

    // Ensure only one given tab is displaying
    $(this).next().children().not("#tab-" + settings.active).css("display", "none");

    // When an tab andchor is clicked
    $(this).on("click", "a", function (event) {
        event.preventDefault();
        
        $(this).parent().addClass(settings.state);
        $(this).parent().siblings().removeClass(settings.state);

        var tab = $(this).attr("href");
        $('.tab-content').children().not(tab).css("display", "none");
        $(tab).css("display", "block");
    });
};
