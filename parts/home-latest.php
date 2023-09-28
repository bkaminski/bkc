<?php
$custom_query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
);
$custom_query_args['paged'] = get_query_var('paged') ? get_query_var('paged') : 1;
$custom_query = new WP_Query($custom_query_args);
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $custom_query;
?>
<section class="bkc-blog pt-3">
    <div class="container pt-5 pb-5" style="overflow:hidden;">
        <div class="row row-cols-1 row-cols-lg-3 g-4 pt-5 pb-5">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col pb-5">
                    <div class="card dark-text h-100 rounded-0">
                        <div id="post-<?php the_ID(); ?>" class="carousel vertical slide rounded-0" data-bs-ride="carousel" data-bs-interval="<?php echo random_int(3500, 6000); ?>">
                            <div class="carousel-inner rounded-0" role="listbox">
                                <div class="carousel-item active">
                                    <a href="<?php the_permalink() ?>" rel="canonical" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="<?php the_permalink() ?>">
                                        <img class="d-block img-fluid bkc-text card-img-top rounded-0" src="holder.js/800x533?theme=sky&auto=yes&random=no&text=<?php echo the_title(); ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100 text-dark" style="border-top: 2px solid #000;">
                            <h1 class="h4 bkc-font"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>

                        </div>
                        <div class="card-footer rounded-0">
                            <small class="text-dark text-end"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>