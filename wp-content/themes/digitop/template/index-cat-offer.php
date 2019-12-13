<section class="index-cat-pro py-1">
    <div class="container-fluid">
        <div class="row">
            <?php $cat_offer = ha_get_option('cat_offer'); ?>
            <?php foreach ($cat_offer as $row) : ?>
            <div class="col-lg-3">
                <figure class="figure">
                    <a href="<?= @$row['url'] ?>"><img src="<?= $row['image'] ?>" class="col-shadow figure-img img-fluid rounded" alt="<?= $row['title'] ?>"></a>
                </figure>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>