<div id="go2main" class="pt-5 mb-5"></div>
<main class="bkc-main-content pt-5">
    <div class="container p-text">
        <div class="row">
            <div class="col-md-4 pt-3">
                <img src="<?php the_post_thumbnail('large'); ?>" alt="<?php echo get_bloginfo('name') ?>" class="img-fluid">
            </div>
            <div class="col-md-8 pt-2">
                <h1 class="dark-text text-uppercase"><?php echo get_bloginfo(); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="p-text">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p><?php esc_html_e('Sorry, something went terribly wrong, please seek help immediately.'); ?></p>
                <?php endif; ?>
                <div class="container pb-5 g-0">
                    <a href="contact" class="btn btn-lg btn-bkc-success rounded-0 px-5 py-3" style="font-size: 2rem; text-decoration:none;">Contact Ben</a>
                </div>
            </div>
        </div>
    </div>
</main>