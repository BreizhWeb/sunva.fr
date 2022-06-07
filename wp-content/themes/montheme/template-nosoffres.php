<?php

/**
 * Template Name: Template Nos offres
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
        <div class="col sectionTitreNosOffres">
            <h1><?php the_field('titre') ?></h1>
            <h2 class="sousTitre"><?php the_field('sous-titre') ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="titreNews">Les formules</h1>
            <h2 class="sousTitre"><?php the_field('sous-titre') ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="col">
                <img src="../Sunva.jpg"/>
                <p>Formule Biarritz</p>
                <p>Idéale pour ceux qui achètent leur premier van et qui se lancent à l’assaut des
                routes pour la première fois. Mais attention, le confort reste la priorité ! Vous
                pourrez passer vos nuits dans un lit confortable, ranger vos affaires comme à
                la maison, cuisiner au sec et au chaud.</p>
                <button>Voir plus</button>
                <p>1500$</p>
            </div>
        </div>
    </div>
</div>

                     
<?php get_footer();
?>