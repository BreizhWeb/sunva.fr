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
<div>
    <div class="sectionTitreSunva">
        <div class="content">
            <h1 class="titre"><?php the_field('titre') ?></h1>
            <h2 class="sousTitre"><?php the_field('sous-titre') ?></h2>
        </div>
    </div>
    <div class="sectionEquipeSunva">
        <div>
            <div class="sectionSunvaTitre content">
                <h2 class="sousTitreSunva"><?php the_field('equipe') ?></h2>
            </div>
            <div class="sectionSunvaPhoto content row">
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp1');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name1') ?></h2>
                    <h2 class="descriptifNom">Fondateur de Sunva et Designer</h2>
                    <h3 class="descriptifNom"><?php the_field('desc1') ?></h3>
                </div>
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp2');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name2') ?></h2>
                    <h2 class="descriptifNom">Co fondatrice de Sunva et chargée de Marketing</h2>
                    <h3 class="descriptifNom"><?php the_field('desc2') ?></h3>
                </div>
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp3');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name3') ?></h2>
                    <h2 class="descriptifNom">Développeur web</h2>
                    <h3 class="descriptifNom"><?php the_field('desc3') ?></h3>
                </div>
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp4');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name4') ?></h2>
                    <h2 class="descriptifNom">Experte en Ebusiness et chargée des relations avec les partenaires</h2>
                    <h3 class="descriptifNom"><?php the_field('desc4') ?></h3>
                </div>
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp5');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name5') ?></h2>
                    <h2 class="descriptifNom">Chargée du Marketing & Communication. Chargée des relations clients</h2>
                    <h3 class="descriptifNom"><?php the_field('desc5') ?></h3>
                </div>
                <div class="col-4 contentSunva">
                    <?php 
                    $image = get_field('pp6');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="photo" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="texteNom"><?php the_field('name6') ?></h2>
                    <h2 class="descriptifNom">Expert en Ebusiness et ?</h2>
                    <h3 class="descriptifNom"><?php the_field('desc6') ?></h3>
                </div>
            </div>
            <div class="sectionConcept flex">
                <div class="vanOrange">
                </div>
                <div class="concept">
                    <h2 class="titreConcept">Le concept</h2>
                    <h3 class="descriptifNom">Jeunes et épris de libertés, nous rêvions de routes ensoleillées, de montagnes
                    aux sommets enneigés, de forêts luxuriantes ... mais tristement, nous butons
                    toujours sur le même constat : nous n’avons pas les moyens. Pas un rond, pas de
                    tune. Nada, Wallou.</h3>
                    <h3 class="descriptifNom">Fini les routes, les montagnes et les forêts et retour à la maison.
                    C’est alors qu’a germé l’idée d’un concept de van aménagé, écologique et pas
                    cher. Un genre de van tout confort, respectueux de l’environnement. C’est ainsi
                    que nous avons décidé de reprendre un concept, déjà pas mal répandu, à notre
                    sauce.</h3>
                    <h3 class="descriptifNom">A la sauce Sunva, supplément écologie.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();
?>