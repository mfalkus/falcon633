<?php
/**
 * Displaying all pages since 2015...
 *
 * @package Falcon633
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php falcon_section_header_open() ?>
    <h1><?php the_title(); ?></h1>
<?php falcon_section_header_close() ?>

<div class="content-wrapper">
    <div class="content-text">
        <div class="grid">
        <div class="grid__item one-whole">

		<main class="main-site" role="main">
            <?php get_template_part( 'content-templates/content', 'page' ); ?>
		</main>
        </div>
        </div>
	</div>
</div>

<?php get_template_part('parts/cta', 'footer'); ?>
<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
