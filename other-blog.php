<?php
/*
*Template Name: Other Blog Loop
*
* @package WordPress
* @subpackage bkc
*/
get_header(); ?>

<?php get_template_part('parts/page', 'header'); ?>

<?php get_template_part('parts/page', 'blog-sort'); ?>

<?php get_template_part('parts/page', 'other-loop'); ?>

<?php get_template_part('parts/page', 'pagination'); ?>

<?php get_footer(); ?>
