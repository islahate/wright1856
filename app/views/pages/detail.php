<?php $slug_collection = array('Héritage' => 'heritage', '1001 Nuits' => '1001-nuits', 'Escapade' => 'escapade'); ?>

<div class="product">
    <div class="arrows">
        <ul>
            <?php if(is_null($previous)): ?>
                <li style="visibility: hidden"><img src="<?= WEBROOT ?>img/flesh.png" /></li>
            <?php else: ?>
                <li><a href="<?= SITE_WEB ?>collections/<?= $slug_collection[$produit->getCollection()] ?>/<?= $previous->getSlug() ?>"><img src="<?= WEBROOT ?>img/flesh.png" /></a></li>
            <?php endif;?>
            <?php if(is_null($next)): ?>
                <li style="visibility: hidden"><img src="<?= WEBROOT ?>img/flesh.png" /></li>
            <?php else: ?>
                <li><a href="<?= SITE_WEB ?>collections/<?= $slug_collection[$produit->getCollection()] ?>/<?= $next->getSlug() ?>"><img src="<?= WEBROOT ?>img/flesh.png" /></a></li>
            <?php endif;?>
        </ul>
    </div>
    <div class="row">
        <div class="col-6 products_images">
            <div class="row">
                <div class="col-md-3 indicators" style="position: relative">

                    <?php foreach ($list_image as $k => $image): ?>
                        <img data-target="#carouselIndicators" data-slide-to="<?= $k ?>" src="<?= WEBROOT ?>images/products/<?= $id ?>/slider/thums/<?= $image ?>" alt="" class="<?= ($k == 0)? 'active':'' ?>">
                    <?php endforeach; ?>
                </div>
                <div class="col-md-9 carousel slide" id="carouselIndicators" data-ride="carousel" style="padding-left: 0;">
                    <div class="carousel-inner">
                        <?php foreach ($list_image as $k => $image): ?>
                            <div class="carousel-item <?= ($k == 0)? 'active':'' ?>"><img src="<?= WEBROOT ?>images/products/<?= $id ?>/slider/<?= $image ?>" alt=""></div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <div class="position">
                <ul>
                    <?php foreach ($list_image as $k => $image): ?>
                        <li data-slide-to="<?= $k ?>" data-target="#carouselIndicators" class="<?= ($k == 0)? 'active':'' ?>"></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="col-6 products_description">
            <div class="float-right">
                <h2 class="product_title h-zantit noselect"><?= strtoupper($produit->getName()) ?></h2>
                <h3 class="product_title_2 noselect"><?= ucfirst($produit->getCollection()) ?></h3>
                <p class="description"><?= $produit->getDescription() ?></p>

                <p class="ingrediant"><?= PRODUIT_DETAIL_INGREDIENTS ?> : <span><?= implode(', ', unserialize($produit->getIngrediant())) ?></span></p>
                <div class="text-center">
                    <button class="btn-principal noselect" style="width: 250px"><?= PRODUIT_DETAIL_SEGGESSION_NEAREST_ROOM ?></button>
                    <ul style="margin-top: 30px;">
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <?php if(!empty($list_accessoires)): ?>
        <div class="row">
            <div class="col-md-5 offset-md-4">
                <span class="span2"></span>
                <h6 class="spedial-heading suggession_title h-zantit2" style="position: relative"><?= PRODUIT_DETAIL_SEGGESSION_TITLE ?></h6>
            </div>
        </div>

        <div class="row margin-top-bottom-30">
            <?php foreach ($list_accessoires as $accessoire): ?>
                <div class="col-md-4">
                    <div class="accessoire_img">
                        <a href="<?= SITE_WEB ?>"><img src="<?= WEBROOT ?>images/accessoires/<?= $accessoire->getId() ?>/<?= $accessoire->getImage() ?>" alt="<?= $accessoire->getName() ?>" title="<?= $accessoire->getName() ?>" /></a>
                    </div>
                    <div class="accessoire_desc text-center ">
                        <a href="<?= SITE_WEB ?>"><p class="product_collection h-zantit2"><?= strtoupper($accessoire->getGamme()) ?></p></a>
                        <a href="<?= SITE_WEB ?>"><h2 class="product_name "><?= ucwords($accessoire->getName()) ?></h2></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>


<script type="text/javascript" src="<?= WEBROOT ?>js/detail.js"></script>