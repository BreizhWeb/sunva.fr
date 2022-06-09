<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="//db.onlinewebfonts.com/c/2a32094b74bdd4607c616294a8a90740?family=Peace+Sans" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    
    <?php wp_head() ?>
</head>
<nav>
    <div class="containerNav">
        <div class="menuLogo">
            <a href="<?php echo home_url(); ?>">   <?php 
            $image = get_field('logoHeader');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="logoHeader" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            </a>
        </div>
        <div class="menuLink">
            <a href="http://localhost/Sunva/">Accueil</a>
            <a href="http://localhost/Sunva/sunva/">Sunva</a>
            <a href="http://localhost/Sunva/nos-offres/">Nos offres</a>
            <a href="http://localhost/Sunva/le-blog/">Le blog</a>
            <a href="http://localhost/Sunva/contact/">Contact</a>
        </div>
    </div>
</nav>


