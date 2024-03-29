<?php
//LOAD SCRIPTS
function enqueue_bkc_scripts()
{
    wp_enqueue_script('Bootstrap-5.3', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/dd00380525.js', false, null, null, false);
    wp_enqueue_script('bkc-scripts', get_template_directory_uri() . '/assets/js/bkcScripts.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('typed', '//cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js',  array('jquery'), null, true, null);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('holderjs', 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js', false, null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_scripts');

//LOAD CSS
function enqueue_bkc_styles()
{
    wp_enqueue_style('bootstrap-5.3', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bkc-styles', get_template_directory_uri() . '/assets/styles/bkcStyles.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Source+Sans+Pro:wght@900&display=swap');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus(array(
    'primary' => __('Primary Menu', 'bkc'),
    'secondary_menu' => __('Secondary Menu', 'bkc'),
    'footer_menu' => __('Footer Menu', 'bkc'),
));


// Register our sidebars and widgetized areas.
function bkc_widgets_init() {

	register_sidebar( array(
		'name'          => 'Category Deropdown Widget',
		'id'            => 'category_dropdown_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="bkc-text">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'bkc_widgets_init' );

