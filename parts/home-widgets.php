<?php
/**
 * Front page widget area
 *
 * @package Falcon633
 */
if ( is_active_sidebar( 'home-widgets-1' ) ) : ?>
    <?php dynamic_sidebar( 'home-widgets-1' ); ?>
<?php endif;
