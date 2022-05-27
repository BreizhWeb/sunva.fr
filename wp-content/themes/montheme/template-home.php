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
<h1><?php the_field('titre') ?></h1>
<h2><?php the_field('sous-titre') ?></h2>
<input type="button"><?php the_field('button-titre') ?></input>
slt
<?php get_footer();
?>