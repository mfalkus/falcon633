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
