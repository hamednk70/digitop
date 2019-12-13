<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php wp_head(); ?>

</head>
<body>
<header>
    <div id="header" class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-4 pt-2">
                        <figure class="figure">
                            <?php
                            $header_options = ha_get_option('header_sec');
                            $header_option = $header_options[0]
                            ?>
                            <img src="<?= $header_option['image'] ?>" class="figure-img img-fluid rounded logo-img"
                                 alt="<?= $header_option['title'] ?>">
                        </figure>
                    </div>
                    <div class="col-lg-8 mt-3 header-search">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i
                                        class="fas fa-search"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder=""
                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-6 pt-4">
                        <a href="#" class="register-login">ورود / ثبت نام</a>
                    </div>
                    <div class="col-lg-6 border-right">
                        <a class="basket" href="#">
                            <span>سبد خرید</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>