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
$cta_text = get_post_meta($post->ID, 'cta_text', TRUE);
if($cta_text != '') {
?>
<div class="indent-bg white-wash">
    <div class="indent-fg indent-fg--purple"></div>
</div>
<div class="content-wrapper content-wrapper--highlight">
    <div class="content-text">
        <?php echo $cta_text; ?>
    </div>

    <div class="indent-bg">
        <div class="indent-fg indent-fg--grey"></div>
    </div>
</div>
<?php } else { ?>
<div class="indent-bg white-wash">
    <div class="indent-fg indent-fg--grey"></div>
</div>
<?php } ?>
