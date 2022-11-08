<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/page', 'header-tracking'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="alternate" hreflang="x-default" href="<?php echo get_home_url(); ?>" />
    <link rel="alternate" hreflang="en-us" href="<?php echo get_home_url(); ?>" />
    <?php get_template_part('parts/page', 'favicons'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="preLoader">
        <div class="text-center" style="margin-top:30%;">
            <div class="spinner-border text-primary" style="width: 4rem; height: 4rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/page', 'main-nav'); ?>