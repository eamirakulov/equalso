<?php get_header(); ?>

	<?php if(have_posts()): the_post(); ?>
	<div class="main-banner">
		<div class="container">
			<div class="text">
				<?php echo get_field('header_content'); ?>
			</div>
		</div>
	</div>

	<div class="three" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="inner">
						<?php
							while ( have_rows('3_blocks') ) : the_row(); ?>
								<?php echo the_sub_field('block_1_content'); ?>
							<?php endwhile;
						?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner">
						<?php
							while ( have_rows('3_blocks') ) : the_row(); ?>
								<?php echo the_sub_field('block_2_content'); ?>
							<?php endwhile;
						?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner">
						<?php
							while ( have_rows('3_blocks') ) : the_row(); ?>
								<?php echo the_sub_field('block_3_content'); ?>
							<?php endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="how-we-work">
		<div class="container">
			<?php
				while ( have_rows('insight_section') ) : the_row(); ?>
					<h2 class="section-title"><?php echo the_sub_field('title'); ?></h2>

					<div class="row">
						<div class="col-sm-6 img visible-xs">
							<img src="<?php echo the_sub_field('image'); ?>">
						</div>
						<div class="col-sm-6">
							<h3><?php echo the_sub_field('subtitle'); ?></h3>
							<?php echo the_sub_field('text'); ?>
						</div>
						<div class="col-sm-6 hidden-xs">
							<img src="<?php echo the_sub_field('image'); ?>">
						</div>
					</div>
				<?php endwhile;
			?>
		</div>
	</div>

	<!--div class="testimonials">
		<div class="container">
			<div class="item">

			</div>
		</div>
	</div-->

	<div class="linked-articles">
		<div class="container">
			<div class="row">
				<?php
					while ( have_rows('blogs') ) : the_row(); ?>
						<div class="col-sm-6 item">
							<h2><a href="<?php echo the_sub_field('blog_1_url'); ?>"><?php echo the_sub_field('blog_1_title'); ?></a></h2>
							<h3><?php echo the_sub_field('blog_1_subtitle'); ?></h3>
							<p><?php echo the_sub_field('blog_1_text'); ?></p>
						</div>
						<div class="col-sm-6 item">
							<h2><a href="<?php echo the_sub_field('blog_2_url'); ?>"><?php echo the_sub_field('blog_2_title'); ?></a></h2>
							<h3><?php echo the_sub_field('blog_2_subtitle'); ?></h3>
							<p><?php echo the_sub_field('blog_2_text'); ?></p>
						</div>
					<?php endwhile;?>
			</div>
		</div>
	</div>

	<div class="subscribe-big">
		<div class="container">
			<div class="inner">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Get in touch global"]'); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

<?php get_footer(); ?>