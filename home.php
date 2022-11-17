<?php get_header(); ?>
<section class="bkc-blog pt-5">
    <div class="container pt-5 pb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col">
                    <div class="card text-dark h-100 shadow">
                        <div id="post-<?php the_ID(); ?>" class="carousel vertical slide" data-bs-ride="carousel" data-bs-interval="<?php echo rand(3000, 5500); ?>">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="<?php the_permalink() ?>">
                                        <img class="d-block img-fluid card-img-top" src="holder.js/800x533?auto=yes&random=yes&text=<?php echo the_title(); ?>" />
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="card-body" style="border-top: 2px solid #000;">
                                <p class="card-text text-dark"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer bg-dark">
                                <small class="text-green"><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
                            </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col">
                <?php bkc_pagination(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
