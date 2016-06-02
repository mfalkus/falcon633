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

    <div class="indent-bg">
        <div class="indent-fg indent-fg--purple"></div>
    </div>
</div>

<div class="content-wrapper content-wrapper--highlight">
    <div class="content-prep">
        <?php if(!'out-of-dev') { ?>
        <div class="grid">
        <div class="grid__item one-whole">

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
            <?php endif; ?>

        </div>
        </div>
        <?php } else { ?>

        <div class="grid">
        <div class="grid__item one-half">
            <p class="lead">Currently based (near) Bath, UK. I’ve been fiddling
            with technology for as long as I can remember. My first computer was a
            Psion Organiser II, originally belonging to my Dad who used it for some
            on-site insurance quoting program.</p>
            <p><a href="#" class="btn">Shoot me an email</a></p>
        </div><!--
     --><div class="grid__item one-half">
            <img src="https://falkus.co/wp-content/uploads/2015/08/falkus-drums.jpg" />
        </div>
        </div>
        <?php } ?>
    </div>

    <div class="indent-bg">
        <div class="indent-fg indent-fg--grey"></div>
    </div>
</div>

<?php get_footer(); ?>
