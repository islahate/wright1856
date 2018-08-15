form_toggle = false;

$(document).ready(function () {

    $('input[name=phone]').mask('0000-00 00 00');
    $('select[name=lieu]').niceSelect();
    $('.datepicker').pickadate();


    $('.tab').css('display', 'none');
    $('.tab').first().fadeIn();

    // $('.mobile_v .tab').css('display', 'none');
    // $('.mobile_v .tab').first().fadeIn();

    $('.tabmobile').css('display', 'none');
    $('.tabmobile').first().fadeIn();

    $('.collections ul li, .rec swqaa').on('click', function () {
        $('.rec').removeClass('active');
        $('.collections ul li').removeClass('active');

        var label = $(this).attr('aria-label');
        $('[aria-label=' + label + ']').addClass('active');

        $('.tab').css('display', 'none');


        // var label = $(this).attr('aria-label');
        $('div[aria-controls=' + label + ']').fadeIn();




        var tabmobile = $(this).attr('id');
        $('#' + tabmobile).addClass('active');
        $('[aria-label=' + tabmobile + ']').addClass('active');
        // $('[aria-label=' + tabmobile + '1]').addClass('active');
    });

    $('.rec').on('click', function () {
        $('.rec').removeClass('active');
        $('.collections ul li').removeClass('active');


        $(this).addClass('active');

        $('.tab').css('display', 'none');

        var label = $(this).attr('aria-label');
        $('div[aria-controls=' + label + ']').fadeIn();
        
        $('[aria-label=' + label + ']').addClass('active');
    });





    $('#open_clendar').on('click', function () {

        if ( !form_toggle ){
            console.log('closed');
            form_toggle = true;

            $('.cover-modal').fadeIn('slow');
            $(this).addClass("clendar_open d-flex align-items-center flex-column");
            $('.open_clendar').css("background-position-y" , "10%");

            setTimeout(function () {
                $('.modal-formulaire').show('slide', {direction: 'right'}, 400);
                $('.reserv').removeClass("d-none");
            }, 500);
        }else{
            console.log('opened');
            form_toggle = false;

            $('.modal-formulaire').hide("slide", { direction: "right" }, 600);
            $('.cover-modal').fadeOut('slow');

            setTimeout(function () {
                // $('#open_clendar').animate({height: 50 + "px", top: "+=45"}, 500);
                $('.reserv').addClass("d-none");
                $('.open_clendar').removeClass("clendar_open flex-column");
                $('.open_clendar').css("background-position-y" , "center");
            }, 600);
        }

        console.log('toggle: ' + form_toggle);
    });














    $('body').mouseup(function(e) {
        console.log('body click');

        var formodel = $(".modal-formulaire");
        var btn_open = $(".open_clendar");
        // var buttons = $(".open_clendar");
        
        console.log("target: " + e.target.id +", this id: " + $(btn_open).attr('id'));

        if (form_toggle && e.target.id != $(btn_open).attr('id') && e.target.id != "open_clendar_p" && e.target.id != $(formodel).attr('id') && !$(formodel).has(e.target).length) {
            $(btn_open).click();
        }
    });

    // .spin-p, .spin-m
    $('.spin-m').on('click', function () {
        var number = $('input[name=nombre]').val();
        if (number == '' || number == undefined || isNaN(number))
            number = 0;

        var _number = parseInt(number);
        if (_number > 0) _number -= 1;

        $('input[name=nombre]').val(_number);
    });

    $('.spin-p').on('click', function () {
        var number = $('input[name=nombre]').val();
        if (number == '' || number == undefined || isNaN(number))
            number = 0;

        var _number = parseInt(number);
        _number += 1;

        $('input[name=nombre]').val(_number);
    });
});
