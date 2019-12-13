<nav id="menu-top">
    <div class="container-fluid">
        <div class="row">

            <div class="col menu-top">

                <?php
                $args=array(
                    'theme_location'=>'main',
                    'depth'=> 3,
                    'container'=> "",
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </div>
</nav>
