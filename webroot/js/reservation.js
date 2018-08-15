$(document).ready(function () {
    $('.phone').mask('0000-00 00 00');
    $('.datepicker').pickadate();
    $('select').niceSelect();




    // .spin-p, .spin-m
    $('.spin-m').on('click', function () {
        var number = $('input[name=nombre]').val();
        if(number == '' || number == undefined || isNaN(number))
            number = 0;

        var _number = parseInt(number);
        if(_number > 0) _number -= 1;

        $('input[name=nombre]').val(_number);
    });

    $('.spin-p').on('click', function () {
        var number = $('input[name=nombre]').val();
        if(number == '' || number == undefined || isNaN(number))
            number = 0;

        var _number = parseInt(number);
        _number += 1;

        $('input[name=nombre]').val(_number);
    });


    $('#send').on('click', function () {
        $("#send").prop("disabled", true);
        var form = $('#form_information')[0];
        var data = new FormData(form);
        $.ajax({
            url: siteweb+'pages/save_rdv',
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                $("#send").prop("disabled", false);
                if (data.success && data.redirect) {
                    window.location.replace(data.to);
                } else
                    console.log('error');
            },
            error: function () {
                $("#send").prop("disabled", false);
                console.log('Une erreur inattendue est survenue');
            }
        });

    });
});
