var callback = function(){
    var viewport = $(window).width();
    if (viewport <= 768) {
        $('#link-susquiz').attr('href','http://www.rosscreighton.com/susquiz');
        $('#link-succinct').attr('href','http://www.rosscreighton.com/succinct');
        $('#link-cfs').attr('href','http://www.capstonefilterservices.com');
        $('#link-cedc').attr('href','http://www.clemsonengineers.com');
        $('#link-ph').attr('href','http://www.rosscreighton.com/ph');
        $('#link-engage').attr('href','http://www.rosscreighton.com/engage');
    }
}
$(document).ready(callback);
$(window).resize(callback);