<?php $liste_the = array(LE_THE_TYPE_THE_1, LE_THE_TYPE_THE_2, LE_THE_TYPE_THE_3, LE_THE_TYPE_THE_4, LE_THE_TYPE_THE_5); ?>



<style type="text/css">







    .m-padding-top-100{
        padding-top: 0;
    }




    /*
      ##Device = Desktops
      ##Screen = 1281px to higher resolution desktops
    */

    @media (min-width: 1281px) {



    }

    /*
      ##Device = Laptops, Desktops
      ##Screen = B/w 1025px to 1280px
    */

    @media (min-width: 1025px) and (max-width: 1280px) {


    }

    /*
      ##Device = Tablets, Ipads (portrait)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) {


    }

    /*
      ##Device = Tablets, Ipads (landscape)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

    }

    /*
      ##Device = Low Resolution Tablets, Mobiles (Landscape)
      ##Screen = B/w 481px to 767px
    */

    @media (min-width: 481px) and (max-width: 767px) {



    }

    /*
      ##Device = Most of the Smartphones Mobiles (Portrait)
      ##Screen = B/w 320px to 479px
    */

    @media (min-width: 320px) and (max-width: 480px) {
        
        .the_slider{
            max-height: 200px;
            min-height: 200px;
            height: 200px;
        }

        .the_slider .container .row {
            height: 200px;
            display: -webkit-box;
            overflow-x: auto;
        }

        .the_slider .container .row .item{
            height: 100%;
            width: 150px;
        }

        .the_slider .container .row .item .overlay{
            padding-right: 20%;
        }

        .the_slider .container .row .active .tilte_{
            font-size: 12px;
        }

        .overlay .value{
            font-size: 23px;
        }

        .h-zantit_overlay:after{
            margin-left: -50px;
        }
        .the_slider .container .row .active span:after{
            width: 20px;
        }



        .tea_name{
            padding-left: 50px;
        }

        .tea_name span:before{
            width: 40px;
        }


        .col-md-4, .col-md-12{
            padding: 0;
        }


        a.btn-principal{
            font-size: 14px;
        }




        .tea_fiche ul li {
            display: inline-block !important;
            width: 42%;
            height: 49px;
            margin: 10px;
            padding: 13px 0;
            text-align: center;
            font-size: 14px;
        }


        .m-padding-top-100{
            padding-top: 100px;
        }


    }
</style>

<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-3">
        <h1 class="h-zantit color-white noselect"><?= LE_THE_TITLE ?></h1>
        <div class="sub-title noselect"><?= LE_THE_SUB_TITLE ?></div>
    </div>
</div>
<div class="the_slider">
    <div class="container">

        <div>
            <div class="row ">

                <?php foreach ($liste_the as $k => $the): ?>
                    <div class="col item <?= ($k == 0)? 'active' : '' ?>" data-target="#carouselIndicators" data-slide-to="<?= $k ?>">
                        <a class="goto" href="#lethe">
                            <div class="room_img d-flex align-items-center">
                                <img src="<?= WEBROOT ?>images/the-<?= str_replace(' ', '-', strtolower($the)) ?>.png" alt="" style="width: 100%" />
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center flex-column">
                                <p class="tilte_ text-center"><?= LE_THE_THE ?></p>
                                <span class="h-zantit_overlay"></span>
                                <h2 class="value text-center "><?= strtoupper($the) ?></h2>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<div class="the_info">
    <div class="container" id="lethe">
        <h4 class="tea_name noselect"><span><?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[0])) ?></span></h4>
        <p><?= LE_THE_TYPE_THE_1_TEXT ?></p>
        <div class="row" style="margin-bottom: 90px;">

            <div class="col-md-8 carousel slide carousel-fade" id="carouselIndicators" data-ride="carousel" data-interval="false">
                <?php foreach ($liste_the as $k => $the): ?>
                    <div class="tea_img carousel-item <?= ($k == 0)? 'active' : '' ?>">
                        <img src="<?= WEBROOT ?>images/the-<?= str_replace(' ', '-', strtolower($the)) ?>.png" alt="<?= $the ?>" style="width: 100%" />
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="carousel-inner">
                    <div class="tea_fiche text-center">
                        <ul>
                            <li class="d-flex align-items-center justify-content-center noselect active " id="Fletrissage"><?= LE_THE_FLETRISSAGE ?></li>
                            <li class="d-flex align-items-center justify-content-center noselect active" id="Fixation"><?= LE_THE_FIXATION ?></li>
                            <li class="d-flex align-items-center justify-content-center noselect active" id="Roulage"><?= LE_THE_ROULAGE ?></li>
                            <li class="d-flex align-items-center justify-content-center noselect " id="Oxydation"><?= LE_THE_OXYDATION ?></li>
                            <li class="d-flex align-items-center justify-content-center noselect" id="Fermentation"><?= LE_THE_FERMENTATION ?></li>
                            <li class="d-flex align-items-center justify-content-center noselect active" id="Sechage"><?= LE_THE_SECHAGE ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center m-padding-top-100">
            <a href="<?= SITE_WEB ?>collections" class="btn-principal noselect" style="width: 20em; min-width: 18em;"><?= ACCUEIL_CTA ?></a>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {

        // start search -->
        $('.item').on('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
            var t = $(this).attr('data-slide-to');
            if (t == '0') {
                $('#Fletrissage').addClass('active');
                $('#Fixation').addClass('active');
                $('#Roulage').addClass('active');
                $('#Oxydation').removeClass('active');
                $('#Fermentation').removeClass('active');
                $('#Sechage').addClass('active');

                $('#lethe h4 span').html('<?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[0])) ?>');
                $('#lethe p').html('<?= LE_THE_TYPE_THE_1_TEXT ?>');
            }
            else if (t == '1') {
                $('#Fletrissage').addClass('active');
                $('#Fixation').removeClass('active');
                $('#Roulage').addClass('active');
                $('#Oxydation').addClass('active');
                $('#Fermentation').removeClass('active');
                $('#Sechage').addClass('active');

                $('#lethe h4 span').html('<?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[1])) ?>');
                $('#lethe p').html('<?= LE_THE_TYPE_THE_2_TEXT ?>');
            }
            else if (t == '2') {
                $('#Fletrissage').addClass('active');
                $('#Fixation').removeClass('active');
                $('#Roulage').removeClass('active');
                $('#Oxydation').removeClass('active');
                $('#Fermentation').removeClass('active');
                $('#Sechage').addClass('active');

                $('#lethe h4 span').html('<?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[2])) ?>');
                $('#lethe p').html('<?= LE_THE_TYPE_THE_3_TEXT ?>');
            }
            else if (t == '3') {
                $('#Fletrissage').addClass('active');
                $('#Fixation').addClass('active');
                $('#Roulage').addClass('active');
                $('#Oxydation').addClass('active');
                $('#Fermentation').removeClass('active');
                $('#Sechage').addClass('active');

                $('#lethe h4 span').html('<?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[3])) ?>');
                $('#lethe p').html('<?= LE_THE_TYPE_THE_4_TEXT ?>');
            }
            else if (t == '4') {
                $('#Fletrissage').addClass('active');
                $('#Fixation').addClass('active');
                $('#Roulage').addClass('active');
                $('#Oxydation').removeClass('active');
                $('#Fermentation').addClass('active');
                $('#Sechage').removeClass('active');

                $('#lethe h4 span').html('<?= LE_THE_THE . ' ' . ucwords(strtolower($liste_the[4])) ?>');
                $('#lethe p').html('<?= LE_THE_TYPE_THE_5_TEXT ?>');
            }
        });
        $("a.goto").on('click', function (event) {

            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    window.location.hash = '';
                });
            }
        });

    });
</script>