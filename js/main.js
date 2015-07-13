var front = {};

(function (context) {
    "use strict";

    var slides = {
        initSlides : function (dataSlides) {
            for (var i = 0, j = dataSlides.length; i < j; i++) {
                var slides = document.getElementById(dataSlides[i][0]);
                if (slides) {
                    $(slides).slides(dataSlides[i][1]);
                }
            }
        },
        init : function () {
            var opts = {
                    effect : 'fade',
                    crossfade : true,
                    play : 4000,
                    preload: false
                },
                dataSlides = [
                    ['slideshow', opts]
                    // ['slides-news', $.extend({}, opts, { paginationClass: 'slide-news-pagination' })]
                ];

            this.initSlides(dataSlides);

        }
    };

    var ui = {
        init : function () {
            $('body').removeAttr('class');

            slides.init();

        }
    };

    context.ui = ui;

})(front);

// $(document).ready(front.ui.init());
$(window).load(function(){ front.ui.init() });
