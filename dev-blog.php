<?php
/*
*Template Name: Dev Blog Page
*
* @package WordPress
* @subpackage bkc
*/
get_header(); ?>

<?php get_template_part('parts/page', 'int-header'); ?>

<?php get_template_part('parts/page', 'blog-sort'); ?>

<?php get_template_part('parts/page', 'dev-loop'); ?>

<?php get_footer(); ?>
