/* Функція каруселі з роками */
(function($) {
    $(function() {
        var jcarousel = $('.how_jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 300) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '',
                size:''
            });

        $('.how_left_year')              /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '-=1'
            });
        $('.how_right_year')            /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '+=1'
            });
        $('.how_left_year')
            .on('jcarouselcontrol:active', function() {          /*подія на кнопку*/
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.how_right_year')
            .on('jcarouselcontrol:active', function() {              /*подія на кнопку*/
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
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
                } else if (width >= 300) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '',
                size:''
            });

        $('.how_left_city')              /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '-=1'
            });
        $('.how_right_city')            /* кнопки перемикання змінюються, базовий клас залишається */
            .jcarouselControl({
                target: '+=1'
            });
        $('.how_left_city')
            .on('jcarouselcontrol:active', function() {                   /*подія на кнопку*/
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.how_right_city')                                              /*подія на кнопку*/
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });
    });
})(jQuery);

/*Функція каруселі із фото*/
$(document).ready(function()
{
    $('#how_slider_foto').tinycarousel({

    });
});

/*функція слайдера з фото*/
$(document).ready(function() {
    $('.fancybox').fancybox();
    /*
     *  Different effects
     */
    // Change title type, overlay closing speed
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
    // Disable opening and closing animations, change title type
    $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect	: 'none',
        helpers : {
            title : {
                type : 'over'
            }
        }
    });
    // Set custom style, close if clicked, change title type and overlay color
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
    // Remove padding, set opening and closing animations, close if clicked and disable overlay
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
     *  Button helper. Disable animations, hide close button, change title type and content
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
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
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
});