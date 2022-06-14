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
</div>
<?php get_footer();
?>