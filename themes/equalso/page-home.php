<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="main-banner">
			<div class="text">
				<?php echo get_field('text'); ?>
			</div>
		</div>

	<script type="text/javascript">
		$(function() {
			$('.home-slider .wrap').slick({
				  centerMode: true,
				  centerPadding: '320px',
				  slidesToShow: 1,
				  arrows: false,
				  dots: false,
				  responsive: [
				    {
						breakpoint: 1024,
						settings: {
				 			 centerPadding: '20px',
						}
				    },
				    {
						breakpoint: 767,
						settings: {
				  			centerPadding: '0px'
						}
				    }
				  ]
			});
		});
	</script>
	<div class="home-slider" id="home-slider">
		<div class="wrap">
			<?php
			$args = array(
				'post_type' => 'home_quotes',
				'posts_per_page' => 5
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="item">
						<?php echo get_field('heading'); ?>
						<p><?php echo get_field('subtext'); ?></p>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div class="mosaic">
		<div class="container">
			<?php
			if( have_rows('opposite_grid') ):
			    while ( have_rows('opposite_grid') ) : the_row();
			    	while ( have_rows('row') ) : the_row();
			    		if(get_sub_field('side') === 'left') : ?>
							<div class="odd item">
								<div class="row">
									<div class="col-sm-6 img" style="background: url(<?php echo the_sub_field('image'); ?>) no-repeat center; background-size: cover;">
										<img class="visible-xs" src="<?php echo the_sub_field('image'); ?>">
									</div>
									<div class="col-sm-6">
										<div class="inner">
											<h2><?php echo the_sub_field('title'); ?></h2>
											<h3><?php echo the_sub_field('subtitle'); ?></h3>
											<p><?php echo the_sub_field('text'); ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php else : ?>
							<div class="even item">
								<div class="row">
									<div class="col-sm-6 img visible-mobile" style="background: url(<?php echo the_sub_field('image'); ?>) no-repeat center; background-size: cover;">
										<img class="visible-xs" src="<?php echo the_sub_field('image'); ?>"></div>
									<div class="col-sm-6">
										<div class="inner">
											<h2><?php echo the_sub_field('title'); ?></h2>
											<h3><?php echo the_sub_field('subtitle'); ?></h3>
											<p><?php echo the_sub_field('text'); ?></p>
										</div>
									</div>
									<div class="col-sm-6 img hidden-mobile" style="background: url(<?php echo the_sub_field('image'); ?>) no-repeat center; background-size: cover;">
									</div>
								</div>
							</div>
			    		<?php endif;
			    	endwhile;
			    endwhile;
			else :
			endif;
			?>
		</div>
	</div>

	<div class="letswork">
		<div class="container">
			<div class="divider visible-mobile"></div>
			<a href="<?php echo get_field('lets_work_url'); ?>"><?php echo get_field('lets_work_text'); ?></a>
			<div class="divider hidden-mobile"></div>

			<h2><?php echo get_field('bottom_heading'); ?></h2>
		</div>
	</div>

	<div class="contact">
		<div class="inner">
			<?php
				while ( have_rows('contact_form') ) : the_row(); ?>
					<h2><?php echo the_sub_field('heading'); ?></h2>
					<h3><?php echo the_sub_field('subtext'); ?></h3>
					<p><?php echo the_sub_field('text'); ?></p>
					<div class="text-center"><a href="<?php echo the_sub_field('button_url'); ?>" class="red-btn"><?php echo the_sub_field('button_text'); ?></a></div>
				<?php endwhile;
			?>

			<div class="form">
				<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
			</div>
		</div>
	</div>

	<?php endif; ?>
<?php get_footer(); ?>