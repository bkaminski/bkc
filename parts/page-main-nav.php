<header>
	<nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/BK-LOGO.png" width="75" alt="<?php echo get_bloginfo( 'name' ); ?>" class="img-fluid">	
			</a>
			<button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#bkcNav" aria-controls="bkcNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse text-uppercase font-weight-bold" id="bkcNav">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'navbar-nav ms-auto',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					)); 
				?>
			</div>
		</div>
	</nav>
</header>
