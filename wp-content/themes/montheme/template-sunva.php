<?php

/**
 * Template Name: Template Sunva
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
        <h1><?php the_field('titre') ?></h1>
        <div class="col">
            <?php 
            $image = get_field('fond');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <p><?php the_field('sous-titre') ?></p>
        <p><?php the_field('texte1') ?></p>
        <p><?php the_field('texte2') ?></p>
        <p><?php the_field('texte3') ?></p>
        <p><?php the_field('texte4') ?></p>
        <p><?php the_field('texte5') ?></p>
        <p><?php the_field('texte6') ?></p>

    </div>
</div>
<?php get_footer();
?>