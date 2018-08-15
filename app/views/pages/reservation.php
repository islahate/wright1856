<style type="text/css">
    .nice-select:after{
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
        transition:none;
        width: 13px;
        height: 25px;
        top: calc(50% - 8px);
    }

    .nice-select.open:after {
        -webkit-transform: none;
        -ms-transform: none;
         transform: none;
    }



    .tea-time .nice-select:after{
        background-image: url("<?= WEBROOT ?>img/datetime.png");
    }


    .spin-p, .spin-m{
        position: absolute;
        right: 2px;
        top: 0;
        width: 20px;
        color: #978B65 !important;
        height: 20px;
        text-align: center;
        cursor: pointer;
    }

    .spin-m{
        top: 18px;
    }

</style>

<div class="row"style="margin-top: 3em;">
    <div class="col-md-8 offset-md-2">
        <h1 class="h-zantit color-white noselect">Reserver votre table</h1>
        <div class="sub-title noselect">Lorem Ipsum Sayi Gooly</div>
    </div>
</div>









<form class="padding-top-100" id="form_information" onsubmit="return false">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="main_input form-text" placeholder="Nom & Prénom" name="nom">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="main_input form-text phone" placeholder="Numéro de Téléphone" name="telephone" maxlength="10" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" style="position: relative;">
                        <input type="text" name="personnes" class="main_input form-text" placeholder="Nombre de Personnes"  />
                        <a class="spin-p noselect">+</a>
                        <a class="spin-m noselect">-</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="lieu">
                            <option data-display="Lieu" name="lieu"></option>
                            <option value="1">Triangle d'or (Casablanca)</option>
                            <option value="2">Morocco mall (Casablanca)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="main_input form-text" placeholder="email" name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group tea-time">
<!--                    <input type="text" class="main_input form-text" placeholder="Plage Horaires">-->
                        <input type="text" class="main_input form-text datepicker" placeholder="Date" name="date_reserv">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center padding-50">
                    <button class="main_button btn-principal" style="width: 240px" id="send">Envoyé</button>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12" style="background-image: url('<?= WEBROOT ?>img/logo-wright-xl.png'); height: 300px; background-repeat: no-repeat; background-position: center;">
            <div class="v-zantit"></div>
        </div>
    </div>
</form>

















<div class="d-flex align-items-center justify-content-center">
    <div class="horisontal-line text-center">
    </div>
</div>
<h2 class="reservation color-white text-center">A PROPOS</h2>





<div class="apropos_txt d-flex align-items-center justify-content-center">
    <p class="about">
        Première maison marocaine de thés de luxe, la Maison Wright est l’héritière d’une histoire unique, où la
        connaissance du thé se transmet de père en fils depuis plus de huit décennies.<br>
        A travers son concept de comptoir-salon, elle convie amateurs et passionnés à découvrir un rituel millénaire et
        à succomber aux goûts de thés délicats et précieux, soigneusement sélectionnés aux quatre coins du monde afin
        d’en garantir l’exceptionnelle qualité.
        Promesse d’un voyage sensoriel mém orable, la Maison Wright est une référence incontournable et la véritable
        ambassadrice d’un art de vivre qui puise dans les grandes traditions marocaine, anglaise et française.
    </p>
</div>


<script type="text/javascript">
     siteweb = '<?= SITE_WEB ?>';

</script>



<script type="text/javascript" src="<?= WEBROOT ?>js/reservation.js"></script>