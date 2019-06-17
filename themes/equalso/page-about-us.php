<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
	<div class="main-banner" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;">
		<div class="container">
			<div class="text">
				<?php echo get_field('header_content'); ?>
			</div>
		</div>
	</div>

	<div class="about-intro" id="intro">
		<div class="container">
			<?php echo get_field('grey_section'); ?>
		</div>
	</div>

	<div class="meet">
		<div class="container">
			<?php
				while ( have_rows('team_section') ) : the_row(); ?>
					<h2 class="section-title"><?php echo the_sub_field('title'); ?></h2>

					<div class="row">
						<div class="col-sm-6 visible-xs img">
							<img src="<?php echo the_sub_field('person_1_image'); ?>">
						</div>
						<div class="col-sm-6">
							<h3><?php echo the_sub_field('person_1_title'); ?></h3>
							<?php echo the_sub_field('person_1_text'); ?>
						</div>
						<div class="col-sm-6 hidden-xs">
							<img src="<?php echo the_sub_field('person_1_image'); ?>">
						</div>
					</div>

					<div class="divider"></div>

					<div class="row">
						<div class="col-sm-6 img">
							<img src="<?php echo the_sub_field('person_2_image'); ?>">
						</div>
						<div class="col-sm-6">
							<h3><?php echo the_sub_field('person_2_title'); ?></h3>
							<?php echo the_sub_field('person_2_text'); ?>
						</div>
					</div>
				<?php endwhile;
			?>
		</div>
	</div>

	<div class="about-bottom">
		<div class="container">
			<?php
				while ( have_rows('bottom_section') ) : the_row(); ?>
				<div class="inner" style="background: url(<?php echo the_sub_field('background_image'); ?>) no-repeat center; background-size: cover; ">
					<h3><a href="<?php echo the_sub_field('link'); ?>"><?php echo the_sub_field('title'); ?></a></h3>
					<?php echo the_sub_field('text'); ?>
				</div>
				<?php endwhile;
			?>
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