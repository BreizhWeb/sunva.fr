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
<div>
    <div class="sectionTitreHome">
        <div class="content">
            <h1 class="titre"><?php the_field('titre') ?></h1>
            <h2 class="sousTitre"><?php the_field('sous-titre') ?></h2>
            <button class="boutonSousTitre"><?php the_field('bouton-sous-titre') ?></button>
        </div>
    </div>
    <div class="sectionDescriptif content">
        <div class="flex">
            <div class="containerLogoDescriptif">
                <?php 
                $image = get_field('logo-descriptif-1');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="icone logoDescriptif" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div>
                <h2 class="titreDescriptif"><?php the_field('titre-descriptif-1') ?></h2>
                <h3 class="sousTitreDescriptif"><?php the_field('texte-descriptif-1') ?></h3>     
            </div>
        </div>
        <div class="flex">
            <div class="containerLogoDescriptif">
                <?php 
                $image = get_field('logo-descriptif-2');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="icone logoDescriptif" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div>
                <h2 class="titreDescriptif"><?php the_field('titre-descriptif-2') ?></h2>
                <h3 class="sousTitreDescriptif"><?php the_field('texte-descriptif-2') ?></h3>
            </div>   
        </div>
        <div class="flex">
            <div class="containerLogoDescriptif">
                <?php 
                $image = get_field('logo-descriptif-3');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="icone logoDescriptif" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div>
                <h2 class="titreDescriptif"><?php the_field('titre-descriptif-3') ?></h2>
                <h3 class="sousTitreDescriptif"><?php the_field('texte-descriptif-3') ?></h3>
            </div>
        </div>
    </div>
    <div class="sectionCarousel">
        <div>
            <?php echo do_shortcode('[metaslider id="207"]'); ?>
        </div>
    </div>
    <div class="sectionNews">
        <div class="content">
            <h3 class="titreNews"><?php the_field('news') ?></h3>
        </div>
        <div>
            <div>
                <img src="./img/Contact.jpg" alt="">
                <p>GGGGGGGGGG</p>
                <input type="button">
            </div>
            <div>
                <img src="" alt="">
                <p>GGGGGGGGGGGGGGG</p>
                <input type="button">
            </div>
            <div>
                <img src="" alt="">
                <p>GGGGGGGGGGG</p>
                <input type="button">
            </div>
        </div>
    </div>
    <div class="sectionNewsletter">
        <div class="content">   
            <h2 class="titre-news"><?php the_field('titre-newsletter') ?></h2>
            <h3 class="sousTitre-news"><?php the_field('texte-newsletter') ?></h3>
            <a href="http://localhost/Sunva/nos-offres/"><button class="boutonSousTitre"><?php the_field('bouton-newsletter') ?></button></a>
        </div>
    </div>
</div>


<?php get_footer();
?>