<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <?php wp_head() ?>
</head>
<body>
<nav class="menu">
    <div style="menuGauche">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">   <?php 
            $image = get_field('logo');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </a>   
    </div>
    <div style="menuDroite">
        <?php wp_nav_menu( 
            array( 
                    'theme_location' => 'navbar', 
                    'menu_id' => 'primary-menu', 
                    'container_class'=> 'ms-auto ', 
                    'menu_class'=> 'navbar-nav mr-auto'
            )); 
        ?>

    </div>
</nav

