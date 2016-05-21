<?php
/**
 * Display a generic post
 *
 * @package Falcon633
 */
?>

<?php if (!is_single()) { ?>
<div class="grid post-splitter">
    <div class="grid__item date-col">
        <span class="date"><?php
            $date = the_date('d M Y', '', '', FALSE);
            echo str_replace(' ', '<br />', $date);
        ?>
        </span>
    </div><!--
 --><div class="grid__item post-col">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>

        <?php if (!is_front_page()) { ?>
        <?php get_template_part( 'content-templates/post', 'footer'); ?>
        <?php } ?>
    </div>
</div>

<?php } else { ?>

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

    <?php get_template_part( 'content-templates/post', 'footer'); ?>

</article>
<?php } ?>
