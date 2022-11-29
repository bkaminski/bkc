<?php
/*
*Template Name: Other Blog Page
*
* @package WordPress
* @subpackage bkc
*/
get_header(); ?>

<?php get_template_part('parts/page', 'int-header'); ?>

<?php get_template_part('parts/page', 'blog-sort'); ?>

<?php get_template_part('parts/page', 'other-loop'); ?>

<?php get_footer(); ?>
