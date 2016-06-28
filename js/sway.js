;(function (factory) {
    if ( typeof define === 'function' && define.amd ) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var sway = {
        control: '.lt.lt-hd'
    };
    var resize = function () {
        var h = $(window).height();
        var control_dom = $(sway.control)[0];
        control_dom.style.height = h + 'px';
    }
    
    $(function () {
        resize();
        $(window).resize(function () {
            resize();
        });
    });
    return sway;
}));