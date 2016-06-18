<?php
/**
 * As expected, the front page of our site
 *
 * @package Falcon633
 */

get_header(); ?>

<div class="section-header">
    <div class="section-header-inner">
        <h1 class="title">Blog</h1>
        <h4 class="subtitle">The Latest</h3>
    </div>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-prep">
        <div class="grid">
        <div class="grid__item one-whole post-list">
        <?php
            $recent_posts = get_posts(array(
                'numberposts'   => 5,
                'category_name' => 'dev',
                'post_status'   => 'publish',
            ));

            foreach ( $recent_posts as $post ) : setup_postdata( $post );
                get_template_part( 'content-templates/content' );
            endforeach;
            wp_reset_postdata();
        ?>
        </div>
        </div>
    </div>

</div>

<?php get_template_part('parts/cta', 'footer'); ?>

<?php get_footer(); ?>
