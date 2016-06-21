<?php
/**
 * As expected, the front page of our site
 *
 * @package Falcon633
 */

get_header(); ?>

<?php get_template_part('parts/home', 'widgets'); ?>

<?php get_template_part('parts/cta', 'footer'); ?>

<?php get_footer(); ?>
