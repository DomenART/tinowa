<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part('partials/head'); ?>
    </head>
    <body>
        <div class="wrapper uk-offcanvas-content">
            <?php get_template_part('partials/header'); ?>

            <!-- <div class="page-internal"> -->
                <div class="uk-container">
                    <!-- <div class=" uk-breadcrumb breadcrumb"> -->
                        <?php //bcn_display() ?>
                    <!-- </div> -->
                    <h1><?php single_cat_title() ?></h1>
                    <?php if (have_posts()) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                                <?php if (has_post_thumbnail()): ?>
                                <a href="<?php echo get_post_permalink() ?>" class="uk-card-media-left uk-cover-container">
                                    <?php the_post_thumbnail() ?>
                                </a>
                                <?php endif; ?>
                                <div>
                                    <div class="uk-card-body">
                                        <a href="<?php echo get_post_permalink() ?>" class="uk-card-title"><?php the_title(); ?></a>
                                        <div class="uk-text-meta"><?php the_date() ?></div>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php echo get_post_permalink() ?>" class="uk-button uk-button-default">
                                            <?php pll_e('more'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php the_posts_pagination() ?>
                    <?php else: ?>
                        <div class="page-content">
                            <p>Извините, ничего не найдено.</p>
                        </div>
                    <?php endif; ?>
                </div>
            <!-- </div> -->

            <?php get_template_part('partials/footer'); ?>
        </div>
    </body>
</html>