/* Функція каруселі із роками */
(function($) {
    $(function() {
        var jcarousel = $('.how_jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 2;
                }
                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '',
                size:''
            });
        $('.how_year-button-left')          /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '-=1'
            });
        $('.how_year-button-right')         /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '+=1'
            });
    });
})(jQuery);
/* Функція каруселі із містами */
(function($) {
    $(function() {
        var jcarousel = $('.how_jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 2;
                }
                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '',
                size:''
            });

        $('.how_city-button-left')              /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '-=1'
            });
        $('.how_city-button-right')            /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '+=1'
            });


    });
})(jQuery);
/* Функція каруселі з картинками */
(function($) {
    $(function() {
        var jcarousel = $('.how_jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 2;
                }
                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '',
                size:''
            });
        $('.how_icon-carousel-button-left')          /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '-=1'
            });
        $('.how_icon-carousel-button-right')         /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '+=1'
            });
    });
})(jQuery);

$(document).ready(function() {
    $('.how_fancybox').fancybox();
    /*
       Different effects
     */
    // Change title type
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title : {
                type : 'outside'
            },
            overlay : {
                speedOut : 0
            }
        }
    });
    // Disable opening and closing animations
    $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect	: 'none',
        helpers : {
            title : {
                type : 'over'
            }
        }
    });
    // Set custom style
    $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,
        openEffect : 'none',
        helpers : {
            title : {
                type : 'inside'
            },
            overlay : {
                css : {
                    'background' : 'rgba(238,238,238,0.85)'
                }
            }
        }
    });
    // Remove padding
    $(".fancybox-effects-d").fancybox({
        padding: 0,
        openEffect : 'elastic',
        openSpeed  : 150,
        closeEffect : 'elastic',
        closeSpeed  : 150,
        closeClick : true,
        helpers : {
            overlay : null
        }
    });
    /*
       Button helper
     */
    $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        prevEffect : 'none',
        nextEffect : 'none',
        closeBtn  : false,
        helpers : {
            title : {
                type : 'inside'
            },
            buttons	: {}
        },
        afterLoad : function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });

    /*
       Thumbnail helper
     */
    $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',
        closeBtn  : false,
        arrows    : false,
        nextClick : true,
        helpers : {
            thumbs : {
                width  : 50,
                height : 50
            }
        }
    });
    /*
       Media helper
     */
    $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
            openEffect : 'none',
            closeEffect : 'none',
            prevEffect : 'none',
            nextEffect : 'none',
            arrows : false,
            helpers : {
                media : {},
                buttons : {}
            }
        });
    /*
       Open
     */
    $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
    });
    $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
            href : 'iframe.html',
            type : 'iframe',
            padding : 5
        });
    });
    $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
            {
                href : '1_b.jpg',
                title : 'My title'
            }, {
                href : '2_b.jpg',
                title : '2nd title'
            }, {
                href : '3_b.jpg'
            }
        ], {
            helpers : {
                thumbs : {
                    width: 75,
                    height: 50
                }
            }
        });
    });
});