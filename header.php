<?php
/**
 * @package Falcon633
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.ico"  />
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory') ?>/favicon-152.png" />

    <meta name="msapplication-TileColor" content="#0eaf87" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory') ?>/favicon-144.png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="total-wrapper">
	<header id="header" class="header-wrapper">
        <div class="grid menu-wrapper">
        <div class="grid__item mobile-trigger-wrapper">
            <a id="menu_trigger" href="#menu" class="mobile-menu-item mobile-trigger">
                <i class="fa fa-bars"></i>
            </a>
        </div><!--
     --><div class="grid__item desktop-menu-wrapper">
            <?php wp_nav_menu( array(
                'container'         => false,
                'menu_class'        => 'nav nav--main nav--top nav--split nav--primary',
                'theme_location'    => 'primary_nav'
            ) ); ?>
			<a class="falcon falcon--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php echo site_heading_tag() ?>
            </a>
            <?php wp_nav_menu( array(
                'container'         => false,
                'menu_class'        => 'nav nav--main nav--top nav--split nav--external',
                'theme_location'    => 'external_nav'
            ) ); ?>

        </div><!--
     --><div class="grid__item speech-icon-wrapper">
            <a class="mobile-menu-item" href="<?php echo falcon_contact_url() ?>">
                <i class="fa fa-comment-o"></i>
            </a>
        </div>
        </div>

        <div id="mobile_menu_wrapper" class="mobile-nav-wrapper">
            <?php wp_nav_menu( array(
                'container'         => false,
                'menu_class'        => 'nav nav--main nav--stacked nav--mobile nav--primary',
                'theme_location'    => 'mobile_nav'
            ) ); ?>
        </div>

    <div class="indent-background indent-background--header"></div>

    </header>
    <div class="header-push"></div>

