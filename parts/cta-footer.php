<?php
/**
 * Template part for call-to-action footer sections
 *
 * These are usually alternative/purple chunks of content
 * to sum up the page and next steps.
 *
 * @package Falcon633
 */

?>
<?php
$extra_class = '';
$cta_text = get_post_meta($post->ID, 'cta_text', TRUE);
$cta_text_narrow = get_post_meta($post->ID, 'cta_text_narrow', TRUE);

if($cta_text_narrow != '') {
    $cta_text = $cta_text_narrow;
    $extra_class = 'content-text--narrow';
}

if($cta_text != '') {
?>
<div class="indent-background indent-background--cta-top"></div>
<div class="content-wrapper content-wrapper--highlight">
    <div class="content-text <?php echo $extra_class; ?>">
        <?php echo $cta_text; ?>
    </div>

    <div class="indent-background indent-background--grey"></div>
</div>
<?php } else { ?>
<div class="indent-background indent-background--footer-top"></div>
<?php } ?>
