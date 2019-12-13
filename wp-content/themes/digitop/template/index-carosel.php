<div class="carosel">
    <?php $carosels = ha_get_option('slider_scroll'); ?>
    <div class="slider-navigator text-center">
        <ul>
            <?php  foreach ($carosels as $row) : ?>
                <li><a><i class="fas fa-circle"></i></a></li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="carosel-inner">
        <?php foreach ($carosels as $row) : ?>
        <a href="<?= @$row['url'] ?>" class="item">
            <figure class="figure">
                <img src="<?= $row['image'] ?>" class="figure-img img-fluid rounded" alt="<?= $row['title'] ?>">
            </figure>
        </a>
        <?php endforeach; ?>
    </div>
    <a class="next">
        <i class="fal fa-angle-left"></i>
    </a>
    <a class="prev">
        <i class="fal fa-angle-right"></i>
    </a>

</div>