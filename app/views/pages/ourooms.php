
<style>







    .indicators {
        margin-right: 20px;
        height: 100%;
        position: relative;
        z-index: 1;
    }

    .indic {
        position: absolute;
        bottom: 0;
    }

    .indicators .rec {
        height: 80px;
        width: 1.82px;
        background-color: #1D3C34;
        margin-top: 10px;
    }

    .indicators .rec:hover {
        cursor: pointer;
    }

    .indicators .rec.active {
        background-color: #D2BC76;
        width: 3.5px;
    }

    .bar_description {
        color: #978B65;
        padding-left: 60px;
    }

    .bar_description h2 {
        color: #D2BC76;
        font-size: 20px;
        margin: 45px 0 17px 0;
    }

    .bar_description .discription {
        padding-right: 27px;
        margin-bottom: 4rem;
    }

    .bar_info {
        padding-left: 24px;
    }

    .col-5 div a:hover {
        text-decoration: none;
    }

    .carousel-inner {
        width: auto !important;
    }
    .bar{
        margin-bottom: 70px;
    }
    .bar .row .col-7{
        z-index: 1;
    }
    .position_center_bottom{
        position: absolute!important;
        bottom: 0;
        left: calc(50% - 70px);
        width: 180px;
    }


</style>


<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-3">
        <h1 class="h-zantit color-white noselect"><?= OUR_ROOMS_TITLE ?></h1>
        <div class="sub-title noselect"><?= OUR_ROOMS_SUB_TITLE ?></div>
    </div>
</div>


<div class="rooms_slider">
    <div class="container">
        <div style="position: absolute;top: 504px;">
            <div class="row ">

                <div class="col item ">
                    <a class="goto" href="#bar_1">
                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_1.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">

                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>
                <div class="col item " >
                    <a class="goto" href="#bar_2">

                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_2.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">
                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>
                <div class="col item">
                    <a class="goto" href="#bar_3">
                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_3.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">
                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>
                <div class="col item">
                    <a class="goto" href="#bar_4">
                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_4.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">
                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>
                <div class="col item">
                    <a class="goto" href="#bar_5">
                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_5.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">
                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>
                <div class="col item">
                    <a class="goto" href="#bar_6">
                    <div class="room_img">
                        <img src="<?= WEBROOT ?>images/room_6.png" alt="">
                    </div>
                    <div class="overlay d-flex align-items-center justify-content-center flex-column">
                        <p class="tilte_ text-center h-zantit_overlay noselect">Collection</p>
                        <span class="h-zantit_overlay"></span>
                        <h2 class="value text-center noselect">Héritage</h2>

                    </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="wright_bars">
        <div class="bar" id="bar_1">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic " id="indic1">
                            <div class="rec active" data-target="#carouselIndicators_" data-slide-to="0">

                            </div>
                            <div class="rec" data-target="#carouselIndicators_" data-slide-to="1">

                            </div>
                            <div class="rec" data-target="#carouselIndicators_" data-slide-to="2">

                            </div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators_" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_1.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_1.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_1.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="">Find Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bar" id="bar_2">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic" id="indic2">
                            <div class="rec active" data-target="#carouselIndicators1" data-slide-to="0">

                            </div>
                            <div class="rec" data-target="#carouselIndicators1" data-slide-to="1">

                            </div>
                            <div class="rec" data-target="#carouselIndicators1" data-slide-to="2">

                            </div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators1" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="" >Find Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bar" id="bar_3">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic" id="indic3">
                            <div class="rec active" data-target="#carouselIndicators2" data-slide-to="0">

                            </div>
                            <div class="rec" data-target="#carouselIndicators2" data-slide-to="1">

                            </div>
                            <div class="rec" data-target="#carouselIndicators2" data-slide-to="2">

                            </div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators2" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_2.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_2.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_2.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="">Find Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bar" id="bar_4">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic " id="indic4">
                            <div class="rec active" data-target="#carouselIndicators3" data-slide-to="0"></div>
                            <div class="rec" data-target="#carouselIndicators3" data-slide-to="1"></div>
                            <div class="rec" data-target="#carouselIndicators3" data-slide-to="2"></div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators3" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="">Find Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bar" id="bar_5">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic " id="indic4">
                            <div class="rec active" data-target="#carouselIndicators3" data-slide-to="0"></div>
                            <div class="rec" data-target="#carouselIndicators3" data-slide-to="1"></div>
                            <div class="rec" data-target="#carouselIndicators3" data-slide-to="2"></div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators3" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_3.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="">Find Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bar" id="bar_6">
            <div class="row">
                <div class="col-7">
                    <div class="indicators float-left">
                        <div class="indic" id="indic2">
                            <div class="rec active" data-target="#carouselIndicators1" data-slide-to="0">

                            </div>
                            <div class="rec" data-target="#carouselIndicators1" data-slide-to="1">

                            </div>
                            <div class="rec" data-target="#carouselIndicators1" data-slide-to="2">

                            </div>
                        </div>
                    </div>
                    <div class="carousel slide" id="carouselIndicators1" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?= WEBROOT ?>images/bar_4.png"/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5 bg">
                    <div class="bar_description">
                        <h2 class="h-zantit2" style="position: relative">Collection Héritage</h2>
                        <p class="discription">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque odio.
                            Morbi in ligula et eros tempor posuere in at purus. Nam dignissim, arcu vitae varius varius,
                            elit erat semper neque, vel sagittis
                        </p>
                        <div class="bar_info">
                            <p>Phasellus vitae scelerisque odio</p>
                            <p>+212 5 55 55 55 55</p>
                            <p>09:00 - 12:00 13:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn-secondaire position_center_bottom" href="">Find Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function (){


        $(".rec").on("click",function(){
            console.log(this);
            // var datatarget = $(this).attr('data-target');
            var elements = $(this).parent().children().removeClass('active');


            // $('div[data-target='+datatarget+']').removeClass('active');
            $(this).addClass('active');
        });
        $('.item').on('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
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