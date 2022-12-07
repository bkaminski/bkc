<?php
$custom_query_args = array(
    'post_type' => 'post',
    'category_name' => 'web-development-blog',
    'posts_per_page' => 6,
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
<main class="bkc-blog pt-5">
    <div class="container pt-5 pb-5" style="overflow:hidden;">
        <div class="row row-cols-1 row-cols-lg-3 g-4 pt-5 pb-5">
            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <div class="col pb-5">
                    <div class="card text-dark h-100 rounded-0">
                        <div id="post-<?php the_ID(); ?>" class="carousel vertical slide" data-bs-ride="carousel" data-bs-interval="<?php echo rand(3500, 6000); ?>">
                            <div class="carousel-inner rounded-0" role="listbox">
                                <div class="carousel-item active">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="<?php the_permalink() ?>">
                                        <img class="d-block img-fluid bkc-text card-img-top rounded-0" src="holder.js/800x533?auto=yes&random=yes&text=<?php echo the_title(); ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100 text-dark" style="border-top: 2px solid #000;">
                            <h1 class="h4 bkc-font"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>

                        </div>
                        <div class="card-footer bg-dark rounded-0">
                            <small class="text-green"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <div class="pagination">
        <div class="container fw-bold">
            <div class="row">
                <div class="col-6">
                    <span class="page--button"><?php previous_posts_link('< Newer Posts'); ?></span>
                </div>
                <div class="col-6">
                    <span class="float-end page--button">
                        <?php next_posts_link('Older Posts >', $custom_query->max_num_pages);
                        $wp_query = NULL;
                        $wp_query = $temp_query; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>