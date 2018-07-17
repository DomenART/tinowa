<?php
/*
Template Name: Главная
*/

$slideshow = get_field( "slideshow" );
//$query = new WP_Query;
//$services = $query->query(array(
//    'post_parent' => 9,
//    'order' => 'ASC',
//    'orderby' => 'menu_order',
//    'posts_per_page' => -1,
//    'post_type' => 'page'
//));

?>
<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part( 'partials/head' ) ?>
    </head>
    <body>
        <div class="wrapper">
            <?php get_template_part( 'partials/header' ) ?>

            <div class="slideshow" uk-slideshow="animation: fade; ratio: false">
                <ul class="uk-slideshow-items">
                    <?php foreach($slideshow as $item) : ?>
                        <li class="slideshow-item">
                            <!-- <div class="uk-position-cover uk-animation-kenburns uk-transform-origin-center-left"> -->
                            <img class="slideshow-item__image" src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['title'] ?>" uk-cover>
                            <!-- </div> -->
                            <div class="slideshow-item__info">
                                <?php if ($item['link']) : ?>
                                    <a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a>
                                <?php else: ?>
                                    <div class="slideshow-item__title"><?php echo $item['title'] ?></div>
                                <?php endif; ?>
                                <div class="slideshow-item__desc"><?php echo $item['description'] ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <button class="slideshow__prev" uk-slideshow-item="previous"></button>
                <button class="slideshow__next" uk-slideshow-item="next"></button>
                <ul class="slideshow__nav uk-slideshow-nav uk-flex uk-flex-center"></ul>
            </div>

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>