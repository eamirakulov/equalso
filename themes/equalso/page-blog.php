<?php get_header(); ?>
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1
	);
	$the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="main-banner" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size: cover;color: #fff;">
				<div class="container">
					<div class="text">
						<h1><a href="<?php echo the_permalink(); ?>"><?php echo get_field('title'); ?> <img src="<?php bloginfo('template_url'); ?>/img/featured.svg"></a></h1>
						<div class="subtitle"><?php echo get_the_excerpt(); ?></div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


	<div class="blog-container">
		<div class="recent-blogs">
			<h2>Recent blogs</h2>

			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4,
				'offset' => 1
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="article">
						<a href="<?php echo the_permalink(); ?>" class="item" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size: cover;">
							<h3><?php echo the_title(); ?></h3>
						</a>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>


		<div class="relevant-blogs">
			<h2>Still relevant</h2>

			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'offset' => 5
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php echo the_permalink(); ?>" class="item" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size: cover;">
						<h3><?php echo the_title(); ?></h3>
					</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<div class="text-center"><a href="#" class="loadmore">Load More</a></div>
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

<?php get_footer(); ?>