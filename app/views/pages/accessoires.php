<style type="text/css">
    .rooms_slider{
        min-height: initial;
    }
</style>


<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-3">
        <h1 class="h-zantit color-white noselect"><?= ACCESSOIRES_TITLE ?></h1>
        <div class="sub-title noselect"><?= ACCESSOIRES_SUB_TITLE ?></div>
    </div>
</div>

<div class="rooms_slider">
    <div class="container">
        <div>
            <div class="row ">
                <?php foreach ($gammes as $gamme): ?>
                    <div class="col item ">
                        <a class="goto" href="<?= SITE_WEB ?>accessoires/<?= $gamme->getSlugGamme() ?>">
                            <div class="room_img">
                                <img src="<?= WEBROOT ?>images/collection_1.png" alt="">
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center flex-column">
                                <p class="tilte_ text-center noselect"><?= $gamme->getGamme() ?></p>
                                <span class="h-zantit_overlay"></span>
                                <h2 class="value text-center noselect"><?= $gamme->getSlogan() ?></h2>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="container bg">
    <div class="text-right filter">
        <a href="#" class="filter_button" ><?= FILTER ?> (<?= count($accessoires) ?> <?= (count($accessoires) > 1)? ACCESSOIRES : ACCESSOIRE ?>) <img src="<?= WEBROOT ?>img/filtericon.png" alt=""></a>
    </div>
    <section class="products">
        <div class="row margin-top-bottom-30">
            <?php if(!empty($accessoires)): ?>
                <?php foreach ($accessoires as $k => $_accessoire): ?>
                    <?= ($k%4 == 0)? '</div><div class="row margin-top-bottom-30">' : '' ?>
                    <div class="col-md-3">
                        <div class="accessoire_img">
                            <a href="<?= SITE_WEB ?>accessoires/<?= $_accessoire->getSlugGamme() ?>/<?= $_accessoire->getSlug() ?>"><img src="<?= WEBROOT ?>images/accessoires/<?= $_accessoire->getId() ?>/<?= $_accessoire->getImage() ?>" alt="<?= $_accessoire->getName() ?>" /></a>
                        </div>
                        <div class="accessoire_desc text-center ">
                            <a href="<?= SITE_WEB ?>accessoires/<?= $_accessoire->getSlugGamme() ?>"><p class="product_collection h-zantit2"><?= strtoupper($_accessoire->getGamme()) ?></p></a>
                            <a href="<?= SITE_WEB ?>accessoires/<?= $_accessoire->getSlugGamme() ?>/<?= $_accessoire->getSlug() ?>"><h2 class="product_name "><?= ucwords($_accessoire->getName()) ?></h2></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</div>