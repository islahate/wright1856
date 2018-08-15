<link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet'>

<style type="text/css">
    .nice-select:after {
        border-bottom: none;
        border-right: none;
        background-image: url("<?= WEBROOT ?>img/location.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        -webkit-transform-origin: unset;
        -ms-transform-origin: unset;
        transform-origin: unset;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
        -webkit-transition: none;
        transition: none;
        width: 13px;
        height: 25px;
        top: calc(50% - 8px);
    }

    .nice-select.open:after {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    #main {
        padding-top: 8%;
        position: relative;
    }

    .spin-p, .spin-m {
        position: absolute;
        right: 2px;
        top: 0;
        width: 20px;
        color: #978B65 !important;
        height: 20px;
        text-align: center;
        cursor: pointer;
    }

    .spin-m {
        top: 18px;
    }

    .input_date {
        background-image: url(<?= WEBROOT ?>img/datetime.png);
        background-repeat: no-repeat;
        background-size: 17px;
        background-position-x: 97%;
        background-position-y: center;
    }

    .clendar_open {
        top: calc(50% - 70px) !important;
        height: 184px !important;
        transition: all 500ms;
        transition-delay: 200ms
    }

    .reserv {
        -ms-transform: rotate(90deg); /* IE 9 */
        -webkit-transform: rotate(90deg); /* Safari 3-8 */
        transform: rotate(-90deg);
        margin-bottom: 0;
    }

    /*.img_op{*/
    /*padding: 28px 0px 39px 0px;*/
    /*}*/
    .c-scrolldown {
        width: 1px;
        height: 160px;
        position: absolute;
        top: calc(50% - 80px);
        left: 0;
        right: 0;
        margin: 0 auto;
        overflow: hidden;
    }

    .c-line {
        width: 100%;
        height: 100%;
        display: block;
        background: linear-gradient(to bottom, rgba(210, 188, 118, 1) 50%, rgba(210, 188, 118, 0) 50%);
        background-position: 0 -160px;
        background-size: 100% 200%;
        animation: scrolldown 2.2s cubic-bezier(0.76, 0, 0.3, 1) forwards infinite;
    }

    @keyframes scrolldown {
        0% {
            background-position: 0 -160px;
        }
        75% {
            background-position: 0 0;
        }
        100% {
            background-position: 0 160px;
        }
    }

    @keyframes scrolldown_mobile {
        0% {
            background-position: 0 -90px;
        }
        75% {
            background-position: 0 0;
        }
        100% {
            background-position: 0 90px;
        }
    }

    .cta-style {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .zantit-la3oub {
        height: 20em;
        margin: 3em 0;
    }

    .accueil-cta {
        width: 20em;
        min-width: 18em;
    }

    @media screen and (min-height: 601px) and (max-height: 865px) {
        .zantit-la3oub {
            height: 10em /*edited  !important*/
        }

        .cta-style {
            bottom: 5%;
        }

    }

    @media screen and (min-height: 1081px) {
        .zantit-la3oub {
            height: 30em !important;
        }

        #main {
            padding-top: 13% !important;
        }
    }

    .open_clendar {
        background-image: url(<?= WEBROOT ?>img/reservation_icon.png);
        background-repeat: no-repeat;
        background-position-x: center;
        background-position-y: center;
    }

    .mobile_formulaire {
        display: none;
    }


</style>


<section id="main" class="acceuil_sec">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="color-white noselect" style="letter-spacing: 0.4em"><?= $params['SITE_NAME'] ?></h1>
            <div class="sub-title noselect" style="letter-spacing: 0.25em"><?= $params['SITE_SLEGON'] ?></div>
        </div>
    </div>

    <div class="row zantit-la3oub">
        <div class="col-md-12">
            <div class="c-scrolldown">
                <div class="c-line"></div>
            </div>
        </div>
    </div>

    <div class="row cta-style">
        <div class="col-md-12 text-center">
            <a href="<?= SITE_WEB ?>collections" class="btn-principal noselect accueil-cta"><?= ACCUEIL_CTA ?></a>
        </div>
    </div>
    <div class="reservation_button mobile_v d-flex align-items-center justify-content-center" id="reservation_button">
        <img src="<?= WEBROOT ?>img/calendar_icon.png">
        <p class="txt">Réserver</p>
    </div>
</section>

<div class="container" style="margin-bottom: 20px">

    <div class="row bloc">
        <div class="col-md-12 ">

            <div class="collections">
                <ul>
                    <li aria-label="tab1" id="collection1" class="active"><?= COLLECTION_1_TITLE ?></li>
                    <li aria-label="tab2" id="collection2"><?= COLLECTION_2_TITLE ?></li>
                    <li aria-label="tab3" id="collection3"><?= COLLECTION_3_TITLE ?></li>
                </ul>

                <div class="indicators desctop_v">
                    <div class="indic">
                        <div class="rec active" aria-label="tab1"></div>
                        <div class="rec" aria-label="tab2"></div>
                        <div class="rec" aria-label="tab3"></div>
                    </div>
                </div>
                <div class="tab desctop_v" aria-controls="tab1"
                     style="background-image: url('<?= WEBROOT ?>img/Escapade_bg.png') ; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading desctop_v">
                                <h2 class="collection_title h-zantit"><?= COLLECTION_1_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_1_SUBTITLE ?></p>
                            </div>
                            <?= COLLECTION_1_DESCRIPTION ?>

                        </div>

                        <div class="col-md-8">
                            <a href="<?= SITE_WEB ?>collections/heritage"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>
                        </div>
                    </div>
                </div>
                <div class="tab desctop_v" aria-controls="tab2"
                     style="background-image: url('<?= WEBROOT ?>img/1001nuits_bg.png') ; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading">
                                <h2 class="collection_title h-zantit"><?= COLLECTION_2_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_1_SUBTITLE ?></p>
                            </div>
                            <?= COLLECTION_2_DESCRIPTION ?>
                        </div>
                        <div class="col-md-8">
                            <a href="<?= SITE_WEB ?>collections/escapade"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>
                        </div>
                    </div>
                </div>
                <div class="tab desctop_v" aria-controls="tab3"
                     style="background-image: url('<?= WEBROOT ?>images/Heritage_bg.png') ; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading">
                                <h2 class="collection_title h-zantit"><?= COLLECTION_3_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_1_SUBTITLE ?></p>
                            </div>
                            <?= COLLECTION_3_DESCRIPTION ?>
                        </div>
                        <div class="col-md-8">
                            <a href="<?= SITE_WEB ?>collections/1001-nuits"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>
                        </div>
                    </div>
                </div>

                <div class="mobile_v">

                <div class="tab tabmobile  active" aria-controls="tab1">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading mobile_v">
                                <h2 class="spedial-heading h-zantit"><?= COLLECTION_1_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_1_SUBTITLE ?></p>
                            </div>
                            <a href="<?= SITE_WEB ?>collections/heritage"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>

                            <div class="indicators mobile_v">
                                <div class="indic">
                                    <div class="rec recmobile  active" aria-label="collection1"></div>
                                    <div class="rec recmobile"  aria-label="collection2"></div>
                                    <div class="rec recmobile" aria-label="collection3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mobile_collection_desc">

                            <?= COLLECTION_1_DESCRIPTION ?>

                        </div>
                    </div>
                </div>
                <div class="tab tabmobile" aria-controls="tab2">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading mobile_v">
                                <h2 class="spedial-heading h-zantit"><?= COLLECTION_2_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_2_SUBTITLE ?></p>
                            </div>
                            <a href="<?= SITE_WEB ?>collections/heritage"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>

                            <div class="indicators mobile_v">
                                <div class="indic">
                                    <div class="rec active" aria-label="collection1"></div>
                                    <div class="rec" aria-label="collection2"></div>
                                    <div class="rec" aria-label="collection3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mobile_collection_desc">

                            <?= COLLECTION_2_DESCRIPTION ?>

                        </div>
                    </div>
                </div>
                <div class="tab tabmobile" aria-controls="tab3">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading mobile_v">
                                <h2 class="spedial-heading h-zantit"><?= COLLECTION_3_TITLE ?></h2>
                                <p class="collection_subtitle "><?= COLLECTION_1_SUBTITLE ?></p>
                            </div>
                            <a href="<?= SITE_WEB ?>collections/heritage"><img
                                        src="<?= WEBROOT ?>images/groupe_de_masques_1.png" style="width: 100%"/></a>

                            <div class="indicators mobile_v">
                                <div class="indic">
                                    <div class="rec active" aria-label="collection1"></div>
                                    <div class="rec" aria-label="collection2"></div>
                                    <div class="rec" aria-label="collection3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mobile_collection_desc">

                            <?= COLLECTION_3_DESCRIPTION ?>

                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
    <div class="history">
        <div class="history_title text-center">
            <h2 class="spedial-heading title"><span>L'histoire de la maison</span></h2>
            <p class="history_subtitle ">LOREM IPSUM HOLY VISON</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="row">
            <!-- mobile-->
                <div class="col-12 overflow mobile_v mb-2" >
                    <img src="<?= WEBROOT ?>images/wright_mobile.png" class="img-fluid scal w-100"/>
                </div>

            <!-- mobile-->

                <div class="col-md-4 overflow desctop_v" style="height: 528px;">
                    <img src="<?= WEBROOT ?>images/img1 (1).png" class="img-fluid scal"/>
                </div>
                <div class="col-md-3 desctop_v"  style="height: 528px">
                    <div class="row" style="height: 50%;">
                        <div class="col-md-12 overflow" style="height: 100%;">
                            <img src="<?= WEBROOT ?>images/img1 (6).png" class="img-fluid scal"/>
                        </div>
                    </div>
                    <div class="row desctop_v" style="height: 50%;">
                        <div class="col-md-12 overflow" style="height: 100%;">
                            <img src="<?= WEBROOT ?>images/img1 (5).png" class="img-fluid scal"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 overflow history_tab"
                     style="height: 528px; background-image: url('<?= WEBROOT ?>images/img1 (4).png'); background-repeat: no-repeat; background-position-y: bottom; background-position-x: center;">
                    <div class="history_description">
                        <h5 style="font-size: 18px; margin-bottom: 25px; padding: 12px 0 0 15px;">L'histoire de la
                            maison</h5>
                        <div class="histoire_txt">
                            <p style="margin-bottom: 10px">L’histoire de la Maison Wright est intimement liée à celle
                                des comptoirs du Maroc lorsque, en 1856, la Compagnie des Indes achemina les premières
                                cargaisons de thé à Tanger et Essaouira. Dotés des plus beaux services, +dessinés par le
                                célèbre argentier britannique Richard Wright, les salons des grandes familles du
                                royaume.</p>
                            <p>L’histoire de la Maison Wright est intimement liée à celle des comptoirs du Maroc
                                lorsque, en 1856, la Compagnie des Indes achemina les premières cargaisons de thé à
                                Tanger et Essaouira. Dotés des plus beaux services, +dessinés par le célèbre argentier
                                britannique Richard Wright, les salons des grandes familles du royaume offrent à cette
                                époque la quintessence du thé</p>
                        </div>
                    </div>

                    <!--                    <div class="col-md-7" style="height: 100%;">-->
                    <!--                        <img src="-->
                    <? //= WEBROOT ?><!--images/img1 (4).png" class="img-fluid scal" style="height: 100%" />-->
                    <!--                    </div>-->
                </div>

                <!-- mobile-->
                <div class="col-12 overflow mobile_v mb-2">
                    <img src="<?= WEBROOT ?>images/wright_mobile1.png" class="img-fluid scal w-100"/>
                </div>

                <div class="col-12 overflow mobile_v mb-5">
                    <img src="<?= WEBROOT ?>images/wright_mobile2.png" class="img-fluid scal w-100"/>
                </div>

                <!-- mobile-->
            </div>
        </div>
    </div>
</div>

<div class="cover-modal" style="display: none"></div>
<div class="modal-formulaire" id="modal_form" style="display: none">
    <div class="row" style="height: 100%;">
        <div class="col-md-2"
             style="background-image: url('<?= WEBROOT ?>img/calendar.png'); background-repeat: no-repeat; background-position: center; background-size: 130px;">
            <h2 class="text-center noselect"
                style="position: absolute; top: calc(50% - 30px); width: 100%; font-size: 2em;">
                <small style="display: block; font-size: 56%!important;">Reservez votre table</small>
                maintenant
            </h2>
        </div>
        <div class="col-md-10">
            <div class="container">
                <form style="margin-top: 23px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="main_input form-text"
                                       placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_NAME ?>"
                                       style="width: 100%; margin: 10px 0;"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="position: relative;">
                                <input type="text" class="main_input form-text" name="nombre"
                                       placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_NOMBRE ?>"
                                       style="width: 100%; margin: 10px 0;"/>
                                <a class="spin-p noselect">+</a>
                                <a class="spin-m noselect">-</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="main_input form-text"
                                       placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_MAIL ?>"
                                       style="width: 100%; margin: 10px 0;"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="main_input form-text" name="phone"
                                       placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_TELEPHONE ?>"
                                       style="width: 100%; margin: 10px 0;"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="margin-top: 5px;">
                                <!--                                <input type="text" class="main_input form-text" placeholder="-->
                                <? //= ACCUEIL_FORM_RESERVATION_INSCRIPTION_LIEU ?><!--" style="width: 100%; margin: 10px 0;"/>-->

                                <select name="lieu">
                                    <option value="1">Triangle d'or (Casablanca)</option>
                                    <option value="2">Morocco mall (Casablanca)</option>
                                </select>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="main_input form-text input_date datepicker"
                                       placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_DATE ?>"
                                       style="width: 100%; margin: 10px 0;"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <button type="button" class="btn-principal noselect"
                                        style="width: 250px; margin-top: 20px;"><?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_SEND ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="open_clendar" class="open_clendar d-flex align-items-center justify-content-center desctop_v">
    <p id="open_clendar_p" class="reserv d-none">Reservation</p>
</div>

<div class="container mobile_v">
    <div class=" mobile_formulaire ">
        <div class="top_part mobile_v">
            <div class="reservation_mobile_icon">
                <img src="<?= WEBROOT ?>img/calendar_icon_mobile.png" alt="">
            </div>
            <div class="reservation_mobile_text d-flex align-items-center flex-column justify-content-center">
                <p>Réservez votre table</p>
                <h3>Maintenant</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="main_input form-text"
                           placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_NAME ?>"
                           style="width: 100%; margin: 10px 0;"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group" style="position: relative;">
                    <input type="text" class="main_input form-text" name="nombre"
                           placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_NOMBRE ?>"
                           style="width: 100%; margin: 10px 0;"/>
                    <a class="spin-p noselect">+</a>
                    <a class="spin-m noselect">-</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="main_input form-text"
                           placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_MAIL ?>"
                           style="width: 100%; margin: 10px 0;"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="main_input form-text" name="phone"
                           placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_TELEPHONE ?>"
                           style="width: 100%; margin: 10px 0;"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group" style="margin-top: 5px;">
                    <!--                                <input type="text" class="main_input form-text" placeholder="-->
                    <? //= ACCUEIL_FORM_RESERVATION_INSCRIPTION_LIEU ?><!--" style="width: 100%; margin: 10px 0;"/>-->

                    <select name="lieu">
                        <option value="1">Triangle d'or (Casablanca)</option>
                        <option value="2">Morocco mall (Casablanca)</option>
                    </select>


                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="main_input form-text input_date datepicker"
                           placeholder="<?= ACCUEIL_FORM_RESERVATION_INSCRIPTION_DATE ?>"
                           style="width: 100%; margin: 10px 0;"/>
                </div>
            </div>
        </div>
        <div class="buttons">
            <div class="btn_reserver_mobile w-50 float-left">
                <img src="<?= WEBROOT ?>img/mobile_celendaricon_gld.png">
                <a href="#">Réserver</a>
            </div>
            <div class="btn_close_mobile w-50 float-left">
                <img src="<?= WEBROOT ?>img/mobile_closeicon.png">
                <a href="#">Close</a>
            </div>
        </div>


    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= WEBROOT ?>js/accueil.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.history_description').on('mouseenter', function () {
            $(this).animate({height: 75 + '%'}, 300);
        });

        $('.history_description').on('mouseleave', function () {
            $(this).animate({height: 40 + '%'}, 300);
        });

        $('.btn_close_mobile').on('click', function () {
            console.log('clicked');
            $('.mobile_formulaire').hide("slide", {direction: "down"}, 600, function () {
                console.log('here');
                $('.mobile_formulaire').css("cssText", "display: none !important");


                // css("cssText", "height: 300px !important;");
            });
        })

        $('#reservation_button').click(function () {
            $(".mobile_formulaire").show("slide", {direction: "down"}, 600);
        });
    });
</script>
