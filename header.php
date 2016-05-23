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
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.png"  type="image/png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="total-wrapper">
	<header id="header" class="header-wrapper">
        <div class="menu-wrapper">
            <?php wp_nav_menu( array(
                'container'         => false,
                'menu_class'        => 'nav nav--main nav--top nav--primary',
                'theme_location'    => 'primary_nav'
            ) ); ?>
			<a class="falcon falcon--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1>Falkus<em>.co</em></h1>
            </a>
            <?php wp_nav_menu( array(
                'container'         => false,
                'menu_class'        => 'nav nav--main nav--top nav--external',
                'theme_location'    => 'external_nav'
            ) ); ?>
        </div>
        <div class="indent-bg indent-bg--point">
        </div>
    </header>
    <div class="header-push indent-fg--grey"></div>

