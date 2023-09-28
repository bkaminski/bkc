<?php get_header(); ?>
<div class="page-header">
    <div class="text-center p-5">
        <h1 class="display-4 bkc-font text-uppercase hv-align-text">
            Related Topics

        </h1>
    </div>
</div>
<div style="padding-top: 3rem;">
	<div class="container pt-5">
		<div class="alert alert-success mt-3 shadow">
			<h4 class="text-uppercase text-center pt-2">
				<?php printf(__('Content Tagged With: %s', 'bkc'), '<span>' . get_search_query() . '</span>'); ?>
				<em>&ldquo;<?php single_tag_title(); ?>&rdquo;</em>
			</h4>
		</div>
		<div class="row mt-5">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-md-12 mb-4">
						<article>
							<h1 class="text-uppercase">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>

								</a>
							</h1>
							<div style="color:#000;">
								<?php the_excerpt(); ?>
							</div>
							<hr>
						</article>
					</div>
				<?php endwhile;
			else : ?>
				<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="col">
		<?php echo bkc_pagination(); ?>
	</div>
</div>
<?php get_footer(); ?>
