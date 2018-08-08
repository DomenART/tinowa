<div class="banners">
    <div class="uk-container">
        <div class="uk-grid" uk-grid>
            <?php foreach(get_field( 'banners', 'option' ) as $item) : ?>
                <div class="uk-width-1-2@s uk-width-1-4@m">
                    <?php if (!empty($item['link'])): echo '<a href="' . $item['link'] . '">'; endif; ?>
                        <img src="<?php echo $item['image']['url'] ?>" alt="">
                    <?php if (!empty($item['link'])): echo '</a>'; endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="footer-first">
    <div class="uk-container">
        <div class="footer-first__container">
            <?php wp_nav_menu([
                'container'         => false,
                'theme_location'    => 'footermenu',
                'menu_class'        => 'footer__menu',
            ]); ?>
        </div>
    </div>
</div>

<div class="footer-second">
    <div class="uk-container uk-container-large">
        <div class="footer-second__container">
            <div class="footer__copyright">
                <?php echo nl2br(pll__('copyright')); ?>
            </div>

            <div class="footer__share">
                <?php foreach(get_field( 'social-links', 'option' ) as $item) : ?>
                    <a href="<?php echo $item['link'] ?>" class="share-item share-item_<?php echo $item['name'] ?>">
                        <span uk-icon="<?php echo $item['name'] ?>"></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<button class="scrollup js-scrollup" uk-scroll>
    <span uk-icon="chevron-up"></span>
</button>

<!--<div id="feedback" uk-modal>-->
<!--    <div class="uk-modal-dialog uk-modal-body modal-dialog--small">-->
<!--        <button class="uk-modal-close-default" type="button" uk-close></button>-->
<!--        <div class="uk-modal-header">-->
<!--          <div class="modal-title">Есть вопросы?<br>Напишите нам.</div>-->
<!--        </div>-->
<!--        --><?php //echo do_shortcode('[contact-form-7 id="96" title="Контактная форма"]'); ?>
   <!-- </div>
</div> -->

<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/dist/main.js"></script>
<?php wp_footer() ?>