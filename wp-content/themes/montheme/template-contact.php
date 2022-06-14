<?php

/**
 * Template Name: Template Contact
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
    <div class="sectionTitreContact">
        <div class="content">
            <div class="formulaire">
                <h1 class="titreDescriptif">Contactez-nous</h1>
                <?php echo do_shortcode( '[contact-form-7 id="204" title="contact"]' ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();
?>