<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

<div class="section-header">
    <h2>Blog</h2>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-prep">
        <div class="grid">
        <div class="grid__item one-whole post-list">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part(
                'content-templates/content',
                get_post_format()
            ); ?>
        <?php endwhile; ?>

        <?php echo falcon_pagination() ?>

        </div>
        </div>
    </div>

    <div class="indent-bg">
        <div class="indent-fg indent-fg--grey"></div>
    </div>
</div>

<?php get_footer(); ?>
