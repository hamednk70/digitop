<style>
    .newsletter{
        display: block;
        margin: 3rem auto;
        color: #212121;
        line-height: 2rem;
        font-size: 1rem;
    }
    .newsletter input[type="text"]{
        width: 100%;
        border: 1px solid #ddd;
        padding: .5rem;
        border-radius: 4px;
        margin: 1rem auto;
    }
    .newsletter input[type="submit"]{
        display: block;
        min-width: 200px;
        border-radius: 4px;
        background-color: #00bfd6;
        color: #fff;
        border: 0;
        padding: .5rem 1rem;
        cursor: pointer;
        margin: 0 auto;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 newsletter">
                <?php dynamic_sidebar('wg_news'); ?>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container text-center mt-5 pt-5">
        <div class="row">
            <div class="col">
                <a href="">
                    <span>برگشت به بالا</span>
                    <i></i>
                </a>
            </div>
        </div>
    </div>
</section>
<footer class="footer mt-3">
    <div class="container-fluid send-support text-center py-4 ">
        <div class="row py-2 top-footer">
            <div class="col-lg-2">
                <i class="far fa-box"></i>
                <p>تحویل سریع محصول</p>
            </div>
            <div class="col-lg-2">
                <i class="fas fa-truck"></i>
                <p>تحویل با ماشین امن </p>
            </div>
            <div class="col-lg-2">
                <i class="fal fa-credit-card"></i>
                <p>پرداخت در محل</p>
            </div>
            <div class="col-lg-2">
                <i class="fal fa-headset"></i>
                <p>پشتیبانی 24 ساعته</p>
            </div>

            <div class="col-lg-2">
                <i class="fas fa-box-open"></i>
                <p>ضمانت بازگشت محصول</p>
            </div>
            <div class="col-lg-2">
                <i class="fas fa-certificate"></i>
                <p>ضمانت اصل بودن محصول</p>
            </div>
        </div>

        <div class="row bottom-footer text-right my-3">
            <?php dynamic_sidebar('wg_footer'); ?>
        </div>

        <div class="row footer-copy">
            <?php $footer_text = ha_get_option('footer_text');?>
            <div class="col py-3">
                <p><?= $footer_text[0]['title'] ?></p>
            </div>
        </div>
    </div>
</footer>
<script>

</script>
<?php wp_footer(); ?>
</body>
</html>