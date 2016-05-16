<?php
/**
 * The most general of all template files
 *
 * @package Falcon633
 */

get_header(); ?>

    <div class="content-wrapper">
        <main class="main-site" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part(
                'content-templates/content',
                get_post_format() ? : 'standard'
            ); ?>
        <?php endwhile; ?>

        <?php echo falcon_pagination() ?>
        </main>
    </div>

<?php get_footer(); ?>
