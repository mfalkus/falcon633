<?php
/**
 * Display a generic post
 *
 * @package Falcon633
 */
?>

<article <?php post_class('lone-content'); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' === get_post_type() ) { ?>
            <div class="entry-meta"><?php falcon_posted_on(); ?></div>
        <?php } ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="pagination-wrapper">',
                'after'  => '</div>',
            ) );
        ?>
    </div>

    <footer class="entry-footer">
        <div class="grid meta-row">
        <div class="grid__item one-half category-row">
            <span>Category:</span>
            <?php echo get_the_category_list(' '); ?>
        </div><!--
     --><div class="grid__item one-half tag-row">
            <?php if (get_the_tags()) { ?>
            <span>Tags:</span>
            <?php the_tags('', ' '); ?>
            <?php } ?>
        </div>
        </div>
    </footer>

    <!-- some neat post splitter here? -->
</article>
