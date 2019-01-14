// slider-start
$(document).ready(function(){
    var pgwSlider = $('.pgwSlider').pgwSlider();
    pgwSlider.reload({
        maxHeight : 750,
        intervalDuration : 6000,
        displayList : false, //(Hide side slide images)
        displayControls : true
    });
});
// slider-end

// scroll-start

// fadeIn
$(window).scroll(function(){
    if ($(this).scrollTop() >120) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});


$('.scrollup').click(function() {
    $("html,body") .animate({
        scrollTop:0
    },600);
    return false;
});


// scroll-end





$(window).on('scroll',function() {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
        $("#sticky-menu").removeClass("sticky");
    }
    else{
        $("#sticky-menu").addClass("sticky");
    }
});