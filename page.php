<?php
/**
 * Displaying all pages since 2015...
 *
 * @package Falcon633
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="section-header">
    <h2><?php the_title(); ?></h2>
</div>

<div class="both-indent content-wrapper">
    <div class="content-prep">
        <div class="grid">
        <div class="grid__item one-whole">

		<main class="main-site" role="main">
            <?php get_template_part( 'content-templates/content', 'page' ); ?>
		</main>
        </div>
        </div>
	</div>
</div>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
