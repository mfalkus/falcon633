<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Falcon633
 */

?>

<article <?php post_class('lone-content'); ?> id="post-<?php the_ID(); ?>">
    <?php
        // We don't bother with a title tag, instead leaving the_content to handle that
        // the_title( '<h1 class="entry-title">', '</h1>' );
    ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

