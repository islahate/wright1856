$(document).ready(function () {

    // start slider value
    $('.carousel').bind('slide.bs.carousel', function (e) {
        $('.indicators img').removeClass('active');
        $('.position ul li.active').removeClass('active');


        $('.indicators img[data-slide-to='+e.to+']').addClass('active');
        $('.position ul li[data-slide-to='+e.to+']').addClass('active');
    });

    $('.position ul li').on('click', function () {
        var slideto = $(this).attr('data-slide-to');

        $(this).parent().children().removeClass('active');
        $(this).addClass('active');

    });
    // end slider value
});