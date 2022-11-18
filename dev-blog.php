<?php
/*
*Template Name: Dev Blog Loop
*
* @package WordPress
* @subpackage bkc
*/
get_header(); ?>

<?php get_template_part('parts/page', 'header'); ?>

<?php get_template_part('parts/page', 'blog-sort'); ?>

<?php get_template_part('parts/page', 'dev-loop'); ?>

<?php get_template_part('parts/page', 'pagination'); ?>

<?php get_footer(); ?>
