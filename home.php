<?php get_header(); ?>
<section class="bkc-blog pt-5">
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-12 pt-5 text-dark">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
                <?php endif; ?>
                <?php bkc_pagination(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
