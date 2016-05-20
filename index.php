<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

<div class="section-header">
    <h2>Blog</h2>
</div>

<div class="both-indent content-wrapper">
    <div class="content-prep">
        <div class="grid">
        <div class="grid__item one-whole">

        <main class="main-site" role="main">

        <?php $first = 1; ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part(
                'content-templates/content',
                get_post_format() ? : 'standard'
            ); ?>
        <?php $first = 0; ?>
        <?php endwhile; ?>

        <?php echo falcon_pagination() ?>
        </main>

        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
