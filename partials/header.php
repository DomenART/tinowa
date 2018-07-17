<div class="toolbar">
    <div class="uk-container">
        <div class="toolbar__lang">
            <ul class="uk-iconnav">
                <li><a href="#" uk-icon="icon: plus"></a></li>
                <li><a href="#" uk-icon="icon: file-edit"></a></li>
                <li><a href="#" uk-icon="icon: copy"></a></li>
                <li><a href="#" uk-icon="icon: trash"></a></li>
            </ul>
        </div>

        <div class="toolbar__sitename">
            Текст
        </div>
    </div>
</div>

<div class="header" uk-sticky>
    <div class="uk-container">
        <div class="header__logo">
            <a href="/"><img src="<?php echo get_theme_file_uri('dist/img/logo.png') ?>" alt=""></a>
        </div>

        <?php wp_nav_menu( array(
	        'container_class' => 'header__menu uk-visible@s',
            'theme_location'  => 'mainmenu',
            'menu_class'      => 'header-menu',
        ) ); ?>
    </div>
</div>
