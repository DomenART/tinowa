<?php
/*
Template Name: Landing
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part( 'partials/head' ) ?>
    </head>
    <body>
        <div class="wrapper">
            <?php get_template_part( 'partials/header' ) ?>

            <div class="slideshow" uk-slideshow="animation: push; min-height: 500; max-height: 500; velocity: .2">

                <div class="uk-position-relative uk-visible-toggle uk-light">

                    <ul class="uk-slideshow-items">
                        <?php foreach(get_field( "slideshow" ) as $item) : ?>
                            <li>
                                <div class="uk-position-cover uk-animation-kenburns uk-transform-origin-center-left" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                    <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['title'] ?>" uk-cover>
                                </div>
                                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                                <?php if ($item['link']) : ?><a href="<?php echo $item['link'] ?>"><?php endif; ?>
                                <div class="uk-position-center uk-position-medium uk-text-center">
                                    <div uk-slideshow-parallax="scale: 1,1,0.8">
                                        <h2 uk-slideshow-parallax="x: 200,0,0"><?php echo $item['title'] ?></h2>
                                        <p uk-slideshow-parallax="x: 400,0,0;"><?php echo $item['text'] ?></p>
                                    </div>
                                </div>
                                <?php if ($item['link']) : ?></a><?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                    <div class="uk-position-bottom-center uk-position-small">
                        <ul class="uk-slideshow-nav uk-dotnav"></ul>
                    </div>
                </div>

            </div>

            <div class="page-internal">
                <div class="uk-container">
                    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; else: ?>
                        <div class="page-content">
                            <p>Извините, ничего не найдено.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>