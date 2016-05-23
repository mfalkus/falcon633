<?php
/**
 * Displaying all pages since 2015...
 *
 * @package Falcon633
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="section-header">
    <h1><?php the_title(); ?></h1>
    <div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-prep">
        <div class="grid">
        <div class="grid__item one-whole">

		<main class="main-site" role="main">
            <?php get_template_part( 'content-templates/content', 'page' ); ?>
		</main>
        </div>
        </div>
	</div>

    <div class="indent-bg">
        <div class="indent-fg indent-fg--grey"></div>
    </div>
</div>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
