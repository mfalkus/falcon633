<span class="meta-links category-links">
    <?php echo get_the_category_list(' '); ?>
</span>
<?php if (get_the_tags()) { ?>
    <span class="meta-links tag-links">
        <?php the_tags('', ' '); ?>
    </span>
<?php } ?>
