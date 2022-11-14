<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php query_posts('post_type=post&paged=' . $paged . '&cat=21,58');
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-lg card-deck mb-4">
                    <div class="card bg-info">
                        <div id="post-<?php the_ID(); ?>" class="carousel vert slide" data-ride="carousel" data-interval="<?php echo rand(4500, 6000); ?>">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'>
                                        <?php the_post_thumbnail('large'); ?>

                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href='<?php the_permalink() ?>'>
                                        <img class="d-block img-fluid" src="holder.js/800x533?auto=yes&random=yes&text=<?php the_title(); ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="border-top: 2px solid #000;">
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <br />
                            <br />
                        </div>
                        <div class="card-footer">
                            <small><em>Last updated: <?php the_time('m/d/Y  g:i:a'); ?></em></small>
                        </div>
                    </div>
                </div>
                <span class="hidden-lg-up"><br /></span>
            <?php endwhile;
        else : ?>
            <p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
        <?php endif; ?>
        <div class="col-lg-12">
            <?php echo bkc_pagination(); ?>
            <br />
        </div>
    </div>
</div>
<?php get_footer(); ?>
