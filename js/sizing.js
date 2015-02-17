    var callback = function(){
        var window_height = $(window).height();
        var navbar_height = $('.navbar').height();
        var background_height = window_height - navbar_height;
        $('#background').css('height', background_height +'px');
        $('#background').css('min-height', background_height +'px');

        var tile_width = $('.tile').width();
        $('.tile').css({'height': tile_width + 'px'});
    };
    
$(document).ready(callback);
$(window).resize(callback);
