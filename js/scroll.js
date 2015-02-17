$(document).ready(function(){
    if ($(window).width() > 768) {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('#nav-links, #menu').css('display','none');
            }
            else{
                $('#nav-links, #menu').css('display','');
            }
        });
    }
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 30) {
            $('#tagline').css('visibility','visible');
            $('#footer').css('border-top','1px solid #000');
        }
        else{
            $('#tagline').css('visibility','');
            $('#footer').css('border-top','');
        }
    });
});