<?php $_collections = array('heritage' => COLLECTION_HERITAGE, '1001-nuits' => COLLECTION_1001_NUITS, 'escapade' => COLLECTION_ESCAPADE); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content=""<?= date('Y - ') . $params['SITE_NAME'] ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= $params['DESCRIPTION'] ?>" />
    <meta name="keywords" content="<?= $params['KEYWORDS'] ?>" />

    <title><?= $params['SITE_NAME'] ?> - <?= $params['SITE_SLEGON'] ?></title>

    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/bootstrap/dist/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/animate.css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/jquery-nice-select/css/nice-select.css"/>
    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/pickadate/lib/themes/default.css"/>
    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/pickadate/lib/themes/wright.date.css"/>
    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>bower_components/pickadate/lib/themes/wright.date.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="<?= WEBROOT ?>css/style.css"/>
    <script type="text/javascript" src="<?= WEBROOT ?>bower_components/jquery/dist/jquery.min.js"></script>
    
</head>
<body>

<?php if ( isset($body_background) && !empty($body_background) ): ?>
    <div style="position: absolute; background-image: url('<?= WEBROOT ?>images/<?= $body_background ?>'); width: 100%; height: 100%; background-repeat: no-repeat; background-size: cover; opacity: .5;"></div>
<?php endif; ?>

<div class="container">
    <section class="header">
        <div class="logo" ><a href="<?= SITE_WEB ?>"><img src="<?= WEBROOT ?>img/logo.png"></a></div>

        <ul class="nav d-flex flex-row justify-content-lg-center justify-content-md-start" style="width: 100%; margin-left: 65px;">
            <?php if($_SESSION['langue'] == 'en'): ?>
                <li class="d-none d-lg-flex p-2 flex-row col-sm-10 menu_top">
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>the-tea"><?= MENU_LE_THE ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center sub-collection"><a class="nav-link" href="<?= SITE_WEB ?>collections"><?= MENU_COLLECTION ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>wright-museum"><?= MENU_MUSEE ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>our-rooms"><?= MENU_OUR_ROOM ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>booking"><?= MENU_RESERVATION ?></a></div>
                </li>
            <?php else: ?>
                <li class="d-none d-lg-flex p-2 flex-row col-sm-10 menu_top">
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>le-the"><?= MENU_LE_THE ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center sub-collection"><a class="nav-link" href="<?= SITE_WEB ?>collections"><?= MENU_COLLECTION ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>musee-wright"><?= MENU_MUSEE ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>nos-magasins"><?= MENU_OUR_ROOM ?></a></div>
                    <div class="nav-item p-2 col d-flex align-items-center justify-content-center"><a class="nav-link" href="<?= SITE_WEB ?>reservation"><?= MENU_RESERVATION ?></a></div>
                </li>
            <?php endif; ?>
            
            <a role="button" class="d-lg-none d-sm-flex flex-column align-items-end bar-holder col" id="menu-btn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </a>
        </ul>

        <div class="icons">
            <a href="javascript:;" id="mutant"><span></span></a>
            <img src="<?= WEBROOT ?>img/search@2x.png" class="search-icon" />
            <?php if(LANGUE == 'en'): ?>
                <a href="<?= SITE_WEB ?>?langue=fr" class="langue">Fr</a>
            <?php else: ?>
                <a href="<?= SITE_WEB ?>?langue=en" class="langue">En</a>
            <?php endif; ?>
        </div>

        <div class="sub-menu">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 sub-menu-left">
                        <div class="row">
                            <?php foreach ($sub_menu as $k => $sb_menu): ?>
                                <div class="col">
                                    <h3 class="sub-menu-title"><a href="<?= SITE_WEB ?>collections/<?= $k ?>"><?= $_collections[$k] ?></a></h3>
                                    <ul>
                                        <?php foreach ($sb_menu as $value): ?>
                                            <li><a href="<?= SITE_WEB ?>collections/<?= $k ?>/<?= $value['slug'] ?>"><?= $value[LANGUE] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <ul class="sub-title-pics">
                            <ul class="sub-title-pics">
                                <li>
                                    <div class="item">
                                        <div class="room_img">
                                            <img src="<?= WEBROOT ?>images/1.png" alt="">
                                        </div>
                                        <div class="overlay d-flex align-items-center justify-content-center flex-column">

                                            <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                                            <span class="h-zantit_overlay"></span>
                                            <h2 class="value text-center noselect">Héritage</h2>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item ">
                                        <div class="room_img">
                                            <img src="<?= WEBROOT ?>images/2.png" alt="">
                                        </div>
                                        <div class="overlay d-flex align-items-center justify-content-center flex-column">

                                            <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                                            <span class="h-zantit_overlay"></span>
                                            <h2 class="value text-center noselect">Héritage</h2>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item ">
                                        <div class="room_img">
                                            <img src="<?= WEBROOT ?>images/3.png" alt="">
                                        </div>
                                        <div class="overlay d-flex align-items-center justify-content-center flex-column">

                                            <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                                            <span class="h-zantit_overlay"></span>
                                            <h2 class="value text-center noselect">Héritage</h2>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

    <?= $contenu ?>

<div id="search-box">
    <div class="search-close">
        <img src="<?= WEBROOT ?>img/close.png"/>
    </div>
    <div class="search-form">
        <form method="get">
            <div class="input-field">
                <input type="text" name="q" id="q" class="Search" placeholder="Search keywords"/>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript" src="<?= WEBROOT ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= WEBROOT ?>bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?= WEBROOT ?>bower_components/jquery-nice-select/js/jquery.nice-select.min.js"></script>


<script src="<?= WEBROOT ?>bower_components/pickadate/lib/picker.js"></script>
<script src="<?= WEBROOT ?>bower_components/pickadate/lib/picker.date.js"></script>
<script src="<?= WEBROOT ?>bower_components/pickadate/lib/translations/fr_FR.js"></script>

<script type="text/javascript">
    var menu = false;

    $(document).ready(function () {

        // start menu -->
        $('#mutant').click(function () {
            $(this).toggleClass('active');

            if ($(this).hasClass('active')) {
                $('.logo').animate({'left': 0, 'padding-left': 0}, 500); // padding-left: 0;

                $('.menu_top').attr("style", "display: -ms-flexbox !important; display: flex !important;");
                $('.menu_top').animate({'opacity': 1});
                $('.menu_top').removeClass('used');


            } else {
                $('.logo').animate({'left': ($('.header').width() / 2) - 66.5 + 'px', 'padding-left': 23}, 700);

                $('.menu_top').addClass('used');

                setTimeout(function () {
                    $('.menu_top').attr("style", "display: none !important");
                }, 500);
            }
        });
        // <-- fin menu

        // start search -->
        $('.search-close').on('click', function () {
            $(this).parent().hide();
        });

        $('.search-icon').on('click', function () {
            $('#search-box').show();
            $('#q').focus();
        });
        // <-- fin search

        // start submenu -->
        $('.sub-collection a').on('mouseenter', function () {
            console.log('here');
            if ($('.sub-menu').is(":hidden"))
                $('.sub-menu').show();
            menu = false;
        });

        $('.sub-menu').on('mouseover', function () {
            menu = true;
        });

        $('.sub-menu').on('mouseleave', function () {
            setTimeout(function () {
                if(menu){
                    $('.sub-menu').hide();
                    menu = false;
                }
            }, 100)
        });

        $('.sub-collection a').on('mouseleave', function () {
            setTimeout(function () {
                if( !menu ){
                    $('.sub-menu').hide();
                    menu = false;
                }
            }, 100)
        });
        // <-- fin submenu
    });




</script>
</body>
</html>