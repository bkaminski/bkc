<?php get_header(); ?>
<div class="text-white">
    <?php get_template_part('parts/page', 'int-header'); ?>
</div>
<article class="bkc-post dark-text pt-5">
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="pb-5">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php comments_template(); ?>
                    <?php endwhile;
                else : ?>
                    <p><?php _e('Whoops, something went horribly wrong. Please seek help immediately.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/page', 'tags'); ?>
</article>
<?php get_footer(); ?>
