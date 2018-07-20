<div class="toolbar">
    <div class="uk-container">
        <div class="toolbar__wrap">
            <div class="toolbar__lang">
                <ul class="uk-iconnav">
                    <?php pll_the_languages([
                        'show_flags' => 1,
                        'show_names' => 0
                    ]); ?>
                </ul>
            </div>

            <div class="toolbar__sitename">
                <?php echo nl2br(pll__('site-title')); ?>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <div class="uk-container">
        <div class="header__wrap">
            <div class="header__logo">
                <a href="/"><img src="<?php echo get_theme_file_uri('dist/img/logo.png') ?>" alt=""></a>
            </div>

            <div class="header__aphorism">
                <?php pll_e('site-aphorism'); ?>
            </div>

            <div class="uk-width-1-1"></div>

            <div class="header__ess">
                <img src="<?php echo get_theme_file_uri('dist/img/ess.jpg') ?>" alt="">
            </div>
        </div>
    </div>

    <div class="header__menu" uk-sticky>
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <?php wp_nav_menu([
	                'container'         => false, 
                    'theme_location'    => 'mainmenu',
                    'menu_class'        => 'header-menu uk-navbar-nav',
                    'walker'            =>  new My_Walker_Nav_Menu(),
                ]); ?>

            </nav>
        </div>
    </div>
</div>
