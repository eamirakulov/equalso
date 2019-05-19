		</div>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="inner">
							<h3>EQUALSO</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container_class' => 'footer-menu') ); ?>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="inner">
							<h3>IMPORTANT READING</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container_class' => 'footer-menu') ); ?>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="inner">
							<h3>COURSES</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3', 'container_class' => 'footer-menu') ); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="subscribe-box">
							<?php echo do_shortcode('[contact-form-7 id="39" title="Get in touch footer"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row flex">
					<div class="col-sm-6 logo">
						<img src="<?php bloginfo('template_url'); ?>/img/graylogo.svg"> Become a better you.
					</div>

					<div class="col-sm-6 social">
						<?php dynamic_sidebar( 'footer_social' ); ?>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
