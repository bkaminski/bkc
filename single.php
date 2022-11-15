<?php get_header(); ?>
<article class="bkc-post text-dark pt-5">
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="pb-5">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php comments_template(); ?>
                        <p class="pt-5"><small><?php the_tags('<span class="badge bg-dark">Related:</span>&nbsp;<span itemprop="keywords">'); ?></span></small><br /></p>
                    <?php endwhile;
                else : ?>
                    <p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>