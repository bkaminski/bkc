<?php

// ALLOW POSTS AND PAGES FEATURED IMAGE
add_theme_support('post-thumbnails');

// REMOVES SCRIPT AND STYLE TYPE ATTR
add_theme_support('html5', ['script', 'style']);

//TITLE TAG SUPPORT
add_theme_support('title-tag');

// REMOVE LINKS TO JSON API UNLESS BUILD HAS A USE FOR THIS
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11);

// REMOVE COMMENTS FEED RSS
add_filter('feed_links_show_comments_feed', '__return_false');

// DISABLE EMOJI BLOAT
function disable_wp_emoji()
{

	// REMOVE ALL ACTIONS USING EMOJI
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	// REMOVE EDITOR EMOJIS
	add_filter('tiny_mce_plugins', 'disable_emoji_tinymce');

	// REMOVE DNS PREFETCH
	add_filter('emoji_svg_url', '__return_false');
}
add_action('init', 'disable_wp_emoji');
function disable_emoji_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

// REMOVE WP VERSION FROM CODE
function dmi_remove_version()
{
	return '';
}
add_filter('the_generator', 'dmi_remove_version');

// DISABLE GUTENBERG CSS
add_action('wp_print_styles', 'wps_deregister_styles', 100);
function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
}

// REMOVE VERSION FROM JS AND CSS
function vc_remove_wp_ver_css_js($src)
{
	if (strpos($src, 'ver=' . get_bloginfo('version')))
		$src = remove_query_arg('ver', $src);
	return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

//Wordpress Fluid Images Bootstrap 5
function bootstrap_fluid_images($html)
{
	$classes = 'img-fluid'; // Bootstrap 5
	// check if there are already classes assigned to the anchor
	if (preg_match('/<img.*? class="/', $html)) {
		$html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
	} else {
		$html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
	}
	// remove dimensions from images,, does not need it!
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}
add_filter('the_content', 'bootstrap_fluid_images', 10);
add_filter('post_thumbnail_html', 'bootstrap_fluid_images', 10);

//begin blog page read more button
function excerpt_read_more_link($output)
{
	global $post;
	return $output . '<a class="btn btn-dark text-uppercase" href="' . get_permalink() . '">Read More  <i class="fas fa-arrow-right fa-fw"></i></a><br><hr>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

//begin url link for comments override
add_filter('comment_form_default_fields', 'url_filtered');
function url_filtered($fields)
{
	if (isset($fields['url']))
		unset($fields['url']);
	return $fields;
}
//end url link comment override

/**
 * Display template for comments and pingbacks.
 *
 */
if (!function_exists('bkc_comment')) :
	function bkc_comment($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		switch ($comment->comment_type):
			case 'pingback':
			case 'trackback': ?>
				<span id="comment-<?php comment_ID(); ?>">
					<div class="card mb-1">
						<div class="card-header">
							<h4 class="card-title"><?php _e('<i class="fas fa-share-alt fa-fw fa-lg"></i>&nbsp;Pingback:', 'bkc'); ?></h4>
						</div>
						<div class="card-body">
							<?php comment_author_link(); ?>
						</div>
					</div>
					<br />
				<?php
				break;
			default:
				// Proceed with normal comments.
				global $post; ?>
					<p id="li-comment-<?php comment_ID(); ?>">
					<div itemprop="comment">
						<div class="card shadow">
							<div class="card-header">
								<?php echo get_avatar($comment, 64); ?>
								<h4><?php
									printf(
										'<small class="fn">%1$s %2$s</small>',
										get_comment_author_link(),
										// If current post author is also comment author, make it known visually.
										($comment->user_id === $post->post_author) ? '<br /><span class="badge bg-secondary"><i class="fas fa-pencil-alt fa-fw"></i> ' . __(
											'Post author',
											'bkc'
										) . '</span> ' : ''
									); ?>
								</h4>
								<small>
									<?php printf(
										'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
										esc_url(get_comment_link($comment->comment_ID)),
										get_comment_time('c'),
										sprintf(
											__('%1$s at %2$s', 'bkc'),
											get_comment_date(),
											get_comment_time()
										)
									); ?>
								</small>
							</div>
							<?php if ('0' == $comment->comment_approved) : ?>
								<p class="alert alert-warning"><?php _e(
																	'Your comment has been submitted and is awaiting moderation. Thank you.',
																	'bkc'
																); ?></p>
							<?php endif; ?>
							<div class="card-body">
								<?php comment_text(); ?>
								<?php comment_reply_link(array_merge(
									$args,
									array(
										'reply_text' => __('<button class="btn btn-info btn-md"><i class="far fa-comment-alt fa-fw fa-lg"></i>&nbsp;Reply</button>', 'bkc'),
										'depth'      => $depth,
										'max_depth'  => $args['max_depth']
									)
								)); ?>
							</div>
						</div>
					</div>
	<?php
				break;
		endswitch;
	}
endif;
