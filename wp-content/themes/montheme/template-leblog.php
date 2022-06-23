<?php

/**
 * Template Name: Template Le blog
 *
 * This is the template that displays contact page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sunva
 */

get_header();
?>
<div>
    <div class="sectionTitreLeBlog">
        <div class="content">
            <h1 class="titre"><?php the_field('titre') ?></h1>
            <h2 class="sousTitre"><?php the_field('sous-titre') ?></h2>
        </div>
    </div>
    <div class="sectionListeBlog row content">
        <div class="col4">
            <div class="article">
                <?php 
                $image = get_field('pp1');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h2 class="textArticle"><?php the_field('a1') ?></h2>
                <button typeclass="boutonSousTitre">2 minutes</input>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
                </div>
                <div class="card-body">
                    <span class="tag tag-teal">Technology</span>
                    <h4>
                        Why is the Tesla Cybertruck designed the way it
                        is?
                    </h4>
                    <p>
                        An exploration into the truck's polarising design
                    </p>
                    <div class="user">
                        <button typeclass="boutonSousTitre">2 minutes</input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();
?>