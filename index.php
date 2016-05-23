<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

<header class="section-header">
<?php if (!is_single()) { ?>
    <h2>Blog</h2>
<?php } else { ?>
    <?php if ( 'post' === get_post_type() ) { ?>
        <h2 class="title"><?php the_title() ?></h2>
        <h4 class="subtitle"><?php falcon_posted_on(); ?></h4>
    <?php } else { ?>
        <h2><?php the_title() ?></h2>
    <?php } ?>
<?php } ?>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</header>

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
