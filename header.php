<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="sticky-header">
    <div class="header-scroll-container">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/marleen_suvi.png" alt="Marleen Suvi Logo" style="height: 80px;">
            </a>
        </h1>
    </div>
</header>
