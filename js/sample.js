$(document).ready(function(){
   
    var window_height = $(window).height();
    var bar_height = (window_height - 4) / 4;
   
    $('.bar-container').css({'height':bar_height + 'px'});
   
    var window_width = $(window).width() - 2;
   
    $('.bar').each(function () {
        $.data(this, 'width', $(this).width());
    });
   
    $('.bar').click(function(){
       
        $('.bar').not(this).css({'width':''}).removeClass('out');
       
        if ($(this).hasClass('out')) {
            $(this).animate({width: $(this).data('width') + "px"},
                            400,
                            function(){
                                $(this).css('width','');
                            })
                    .removeClass('out');
        }
       
        else{
            $(this).animate({width: window_width + 'px'}, 400).addClass('out');
        }
   
    });
   
}); 