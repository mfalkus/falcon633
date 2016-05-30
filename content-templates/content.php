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
        <?php if (!is_front_page()) { ?>
        <?php get_template_part( 'content-templates/post', 'meta'); ?>
        <?php } ?>

        <?php the_excerpt(); ?>

    </div>
</div>

<?php } else { ?>

<article <?php post_class('lone-content'); ?> id="post-<?php the_ID(); ?>">
    <div class="entry-content">
        <?php the_content(); ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="pagination-wrapper">',
                'after'  => '</div>',
            ) );
        ?>
    </div>

    <?php get_template_part( 'content-templates/post', 'meta'); ?>

</article>
<?php } ?>
