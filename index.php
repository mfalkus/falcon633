<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

<?php if (!is_single()) { ?>
<?php falcon_section_header_open() ?>
    <?php if (is_category()) { ?>
        <h1><?php echo single_cat_title() ?></h1>
    <?php } else if (is_tag()) { ?>
        <h1><?php echo single_tag_title() ?></h1>
    <?php } else { ?>
        <h1>Blog</h1>
    <?php } ?>
<?php falcon_section_header_close() ?>
<?php } else { ?>
<header class="section-header section-header--post">
    <div class="section-header-inner">
    <?php if ( 'post' === get_post_type() ) { ?>
        <h5 class="subtitle"><?php falcon_posted_on(); ?></h5>
        <h1 class="title"><?php the_title() ?></h1>
    <?php } else { ?>
        <h1><?php the_title() ?></h1>
    <?php } ?>
    </div>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</header>
<?php } ?>

<div class="content-wrapper">
    <div class="content-prep">
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
