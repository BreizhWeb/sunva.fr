<?php

/**
 * Template Name: Template Accueil
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
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php the_field('titre') ?></h1>
            <h2><?php the_field('sous-titre') ?></h2>
            <input type="button"><?php the_field('button-titre') ?></input>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php 
            $image = get_field('logo-descriptif-1');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php the_field('titre-descriptif-1') ?></h2>
            <h3><?php the_field('texte-descriptif-1') ?></h3>
        </div>
        <div class="col">
            <?php 
            $image = get_field('logo-descriptif-2');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php the_field('titre-descriptif-2') ?></h2>
            <h3><?php the_field('texte-descriptif-2') ?></h3>
        </div>
        <div class="col">
            <?php 
            $image = get_field('logo-descriptif-3');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php the_field('titre-descriptif-3') ?></h2>
            <h3><?php the_field('texte-descriptif-3') ?></h3>
        </div>
    </div>
    <div class="row">
        <?php echo do_shortcode('[sp_wpcarousel id="116"]'); ?>
    </div>
    <div class="row">
    ...
    </div>
</div>


<?php get_footer();
?>