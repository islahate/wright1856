<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-3">
        <h1 class="h-zantit color-white noselect"><?= $collection ?></h1>
        <div class="sub-title noselect">Triangle D'or</div>
    </div>
</div>

<div class="container bg" style="padding: 1px 0;">
    <div class="text-right filter">
        <a href="#" class="filter_button" ><?= strtoupper(FILTER) ?> (<?= count($produits) ?> <?= (count($produits) > 1)? ucfirst(PRODUCTS) : ucfirst(PRODUCT) ?>) <img src="<?= WEBROOT ?>img/filtericon.png" alt=""></a>
    </div>
    <section class="products">
        <div class="row margin-top-bottom-30">

            <?php foreach ($produits as $produit): ?>
                <div class="col-md-4">
                    <div class="accessoire_img">
                        <a href="<?= SITE_WEB ?>collections/<?= $collection ?>/<?= $produit->getSlug() ?>"><img src="<?= WEBROOT ?>images/products/<?= $produit->getId() ?>/<?= $produit->getImage() ?>" alt=""></a>
                    </div>
                    <div class="accessoire_desc text-center ">
                        <a href="<?= SITE_WEB ?>collections/<?= $collection ?>"><p class="product_collection h-zantit2 noselect"><?= $collection ?></p></a>
                        <a href="<?= SITE_WEB ?>collections/<?= $collection ?>/<?= $produit->getSlug() ?>"><h2 class="product_name noselect"><?= $produit->getName() ?></h2></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</div>