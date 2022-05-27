<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <?php wp_head() ?>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">   <?php 
        $image = get_field('logo');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </a>            
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'navbar',
                    // 'depth'             => 2,
                    'container' => 'div',
                    'container_id' => 'navbarResponsive',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker())
            );
            ?>
    </ul>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container  justify-content-center justify-content-lg-around">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><a class="navbar-brand" href="<?php echo home_url(); ?>">   <?php 
            $image = get_field('logo');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </a>   
        <button class="navbar-toggler navbar-toggler-right position-absolute" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" id="nav-bar-toggle">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'menu-1',
                // 'depth'             => 2,
                'container' => 'div',
                'container_id' => 'navbarResponsive',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
        
    </div>
</nav>