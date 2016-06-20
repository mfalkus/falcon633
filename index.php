<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header();

if (!is_single()) {
    falcon_section_header_open() ?>
    <?php if (is_category()) { ?>
        <h1><?php echo single_cat_title() ?></h1>
    <?php } else if (is_tag()) { ?>
        <h1><?php echo single_tag_title() ?></h1>
    <?php } else { ?>
        <h1>Blog</h1>
    <?php }
} else {
    falcon_section_header_open('section-header--post') ?>
    <?php if ( 'post' === get_post_type() ) { ?>
        <h4 class="subtitle"><?php falcon_posted_on(); ?></h4>
        <h1 class="title"><?php the_title() ?></h1>
    <?php } else { ?>
        <h1><?php the_title() ?></h1>
    <?php }
}

falcon_section_header_close() ?>

<div class="content-wrapper">
    <div class="content-text content-text--body">
        <div class="grid grid--full">
        <div class="grid__item one-whole post-list">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part(
                'content-templates/content',
                get_post_format()
            ); ?>
        <?php endwhile; ?>

        <?php if (!is_single()) { ?>
        <?php echo falcon_pagination() ?>
        <?php } ?>

        </div>
        </div>
    </div>

    <div class="indent-bg">
        <div class="indent-fg indent-fg--grey"></div>
    </div>
</div>

<?php get_footer(); ?>
