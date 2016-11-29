<?php
/**
 * After single post widget area
 *
 * @package Falcon633
 */
if ( is_active_sidebar( 'post-widgets-1' ) ) : ?>
    <div class="content-wrapper content-wrapper--highlight">
        <div class="content-text content-text--narrow">
        <?php dynamic_sidebar( 'post-widgets-1' ); ?>

        <aside class="theme-rss-link">
            <a href="<?php bloginfo('rss_url'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
        </aside>
        </div>
        <div class="indent-background indent-background--grey"></div>
    </div>
<?php endif;
