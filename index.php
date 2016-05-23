<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

<?php if (!is_single()) { ?>
<header class="section-header">
    <h1>Blog</h1>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</header>
<?php } else { ?>
<header class="section-header section-header--post">
    <?php if ( 'post' === get_post_type() ) { ?>
        <h4 class="subtitle"><?php falcon_posted_on(); ?></h4>
        <h1 class="title"><?php the_title() ?></h1>
    <?php } else { ?>
        <h1><?php the_title() ?></h1>
    <?php } ?>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</header>
<?php } ?>

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
