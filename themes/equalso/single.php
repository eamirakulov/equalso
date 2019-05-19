<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
	<div class="single-post">
	<div class="main-banner" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size: cover;color: #fff;">
		<div class="container">
			<div class="text">
				<h1><?php echo get_field('title'); ?></h1>
				<div class="subtitle"><?php echo get_the_excerpt(); ?></div>
			</div>
		</div>
	</div>

	<div class="single-container">
		<div class="article-content">
			<?php echo the_content(); ?>
			<div class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/infinity.svg"></div>
		</div>


		<div class="recent-blogs">
			<h2>Recent blogs</h2>

			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="article">
						<a href="<?php echo the_permalink(); ?>" class="item" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size: cover;">
							<h3><?php echo the_title(); ?></h3>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="blogs-info">
			<?php dynamic_sidebar( 'global_1' ); ?>
		</div>
	</div>
	<div class="subscribe-big">
		<div class="container">
			<div class="inner">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Get in touch global"]'); ?>
			</div>
		</div>
	</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>