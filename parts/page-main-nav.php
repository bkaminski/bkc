<!-- begin desktop nav -->
<header class="d-none d-lg-block">
	<nav class="navbar navbar-expand-lg fixed-top clearHeader">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/bk-logo-black.svg" width="75" alt="<?php echo get_bloginfo('name') ?>" class="img-fluid">
			</a>
			<div class="collapse navbar-collapse text-uppercase" id="bkcNav">
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'fw-bold navbar-nav ms-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>

			</div>
		</div>
	</nav>
</header>
<!-- end desktop nav -->
<!-- begin mobile offcanvas nav -->
<header class="d-block d-lg-none">
	<nav class="navbar fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bk-logo-black.svg" alt="<?php echo get_bloginfo('name') ?>" width="75" class="img-fluid">
				<span class="text-white bkc-text">&nbsp;Benjamin Kaminski Consulting</span>
			</a>
			<br>
			<button class="navbar-toggler rounded-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title text-shadow text-uppercase" id="offcanvasNavbarLabel">Navigation</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="text-center mb-4">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/bk-logo-black.svg" alt="<?php echo get_bloginfo('name') ?>" width="75" class="img-fluid">
							<br />
						</a>
					</div>
					<?php
					wp_nav_menu(array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'fw-bold navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					)); ?>
					<form class="d-flex pt-3" role="search">
						<input id="searchBkc" type="text" class="form-control form-control-lg rounded-0" placeholder="Search This Site" aria-label="Search This Site" aria-describedby="button-addon2" value="<?php echo esc_html($s, 1); ?>" name="s" maxlength="33" required>
						<button class="btn btn-bkc-success rounded-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- end mobile offcanvas nav -->