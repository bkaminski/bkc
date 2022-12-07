<div id="go2main" class="pt-5 mb-5"></div>
<main class="bkc-main-content pt-5 pb-3">
    <div class="container">
        <h1 class="text-center text-dark pb-4"><?php echo get_bloginfo(); ?></h1>
    </div>
    <div class="container p-text">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="p-text">
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, something went terribly wrong, please seek help immediately.'); ?></p>
        <?php endif; ?>
    </div>
    <div class="container text-center pb-5">
        <a href="contact" class="btn btn-lg btn-success rounded-0 mt-5 px-5 py-3" style="font-size: 2rem;">Contact Ben</a>
    </div>
</main>
