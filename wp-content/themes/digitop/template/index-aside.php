<div id="sidebar-right" class="col-lg-2 px-2">
    <?php $aside_images = ha_get_option('aside_image'); $aside_image=$aside_images[0] ?>
    <aside>
        <a href="<?= @$aside_image['url'] ?>">
            <figure class="figure">
                <img src="<?= $aside_image['image'] ?>" class="img-first figure-img img-fluid rounded" alt="<?= $aside_image['title'] ?>">
            </figure>
        </a>
    </aside>
    <aside>
        <div class="container send-support text-center py-4">
            <div class="row">
                <?php $services = ha_get_option('index_services'); ?>
                <?php foreach ($services as $row) : ?>
                <div class="col-lg-6">
                    <i class="<?= $row['icon'] ?>"></i>
                    <p><?= $row['title'] ?></p>
                </div>
                <?php endforeach; ?>

            </div>
        </div>

    </aside>
</div>