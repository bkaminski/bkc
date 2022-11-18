<?php
$args = array(
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DESC',
    'cat' => 21,
);
$loop = new WP_Query($args); ?>
<article class="bkc-blog pt-5">
    <div class="container pt-5 pb-5" style="overflow:hidden;">
        <div class="row row-cols-1 row-cols-lg-3 g-4 pt-5 pb-5">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col pb-3 shadow-lg">
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
                                        <img class="d-block img-fluid bkc-text card-img-top" src="holder.js/800x533?auto=yes&random=yes&text=<?php echo the_title(); ?>">
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
        </div>
    </div>
