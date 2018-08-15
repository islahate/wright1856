<?php
$slug_collection = array(
        'Héritage' => 'heritage',
        '1001 Nuits' => '1001-nuits',
        'Escapade' => 'escapade'
);
?>
<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-2">
        <h1 class="h-zantit color-white noselect"><?= strtoupper(COLLECTIONS_TITLE) ?></h1>
        <div class="sub-title noselect"><?= COLLECTIONS_SUBTITLE ?></div>
    </div>
</div>

<div class="rooms_slider">
    <div class="container">
        <div>
            <div class="row ">

                <?php foreach ($collections as $collection): ?>
                    <div class="col item ">
                        <a href="<?= SITE_WEB ?>collections/<?= $collection['link'] ?>">
                            <div class="room_img">
                                <img src="<?= WEBROOT ?>images/<?= $collection['image'] ?>" alt="">
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center flex-column">
                                <p class="tilte_ text-center noselect">Collection</p>
                                <span class="h-zantit_overlay"></span>
                                <h2 class="value text-center noselect"><?= $collection['title'] ?></h2>
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
        <a href="#" class="filter_button" ><?= strtoupper(FILTER) ?> (<?= count($produits) ?> <?= (count($produits) > 1)? ucfirst(PRODUCTS) : ucfirst(PRODUCT) ?>) <img src="<?= WEBROOT ?>img/filtericon.png" alt=""></a>
    </div>

    <section class="products">
        <div class="row margin-top-bottom-30">
            <?php foreach ($produits as $k => $produit): ?>
                <?= ($k%4 == 0)? '</div><div class="row margin-top-bottom-30">':'' ?>
                <div class="col-md-3 noselect">
                    <div class="accessoire_img">
                        <a href="<?= SITE_WEB ?>collections/<?= $slug_collection[$produit->getCollection()] ?>/<?= $produit->getSlug() ?>"><img src="<?= WEBROOT ?>images/products/<?= $produit->getId() ?>/<?= $produit->getImage() ?>" alt=""></a>
                    </div>
                    <div class="accessoire_desc text-center noselect">
                        <a href="<?= SITE_WEB ?>collections/<?= $slug_collection[$produit->getCollection()] ?>"><p class="product_collection h-zantit2"><?= strtoupper($produit->getCollection()) ?></p></a>
                        <a href="<?= SITE_WEB ?>collections/<?= $slug_collection[$produit->getCollection()] ?>/<?= $produit->getSlug() ?>"><h2 class="product_name "><?= ucwords( strtolower($produit->getName()) ) ?></h2></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>