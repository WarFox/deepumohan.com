/*
    Plugin to center any element in page.
    This will automatically center an element based on the options given.
    By default it will center the element both vertically and horizontally.
    direction : both (default), horiz, vert
    onResize: true, false (default)
    container: selector of the container. default is window
*/
jQuery.fn.center = function (options) {

    var settings = {   direction : 'both', onResize: false , container : window};

    jQuery.extend(settings, options);

    var container = settings.container;
    var direction = settings.direction;
    var onResize = settings.onResize;
    var obj = this;

    this.css("position","absolute");

    if (direction == 'both') {
        this.css("top", ( $(container).height() - this.height() ) / 2+$(container).scrollTop() + "px");
        this.css("left", ( $(container).width() - this.width() ) / 2+$(container).scrollLeft() + "px");
    } else if (direction == 'horiz') {
        this.css("left", ( $(container).width() - this.width() ) / 2+$(container).scrollLeft() + "px");
    } else if (direction == 'vert') {
        this.css("top", ( $(container).height() - this.height() ) / 2+$(container).scrollTop() + "px");
    }

    if(onResize == true) {
        $(container).resize(function() {
            jQuery.extend(options,{ onResize: false});
            $(obj).center(options);
        });
    }
    return this;
};