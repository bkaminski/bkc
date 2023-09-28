<section class="page-layout pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col dark-text">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>