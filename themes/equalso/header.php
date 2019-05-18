<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn:400,600,600i,700&display=swap" rel="stylesheet">


	<?php wp_head(); ?>

</head>
	<body class="<?php echo the_slug(); ?>">
		<!--[if lt IE 8]><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p><![endif]-->
		<div id="start-modal">
			<a href="#" class="close-modal">CLOSE WINDOW</a>
			<div class="container">
				<div>
					<h2>Enter your e-mail address and we will get in touch!</h2>
					<div class="modal-form">
						<?php echo do_shortcode('[contact-form-7 id="40" title="Get in touch modal"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<header>
			<div class="container">
				<div class="row flex">
					<?php if(!is_single() && !is_page('blog')) : ?>
						<div class="col-md-3 left">
							<?php if(is_page('our-philosophy') || is_page('about-us')) : ?>
								<a class="logo" href="<?php echo get_site_url()?>"><img alt="Logo" src="<?php bloginfo('template_url'); ?>/img/logow.svg" /></a>
							<?php else : ?>
								<a class="logo" href="<?php echo get_site_url()?>"><img alt="Logo" src="<?php bloginfo('template_url'); ?>/img/logo.svg" /></a>
							<?php endif; ?>
						</div>
						<div class="col-md-6 menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'main-menu') ); ?>
						</div>
						<div class="col-md-3 right">
							<a class="start" href="#">LET'S GET STARTED!</a>
						</div>
					<?php else : ?>
						<a class="back" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/back.svg"> HOMEPAGE</a>
					<?php endif; ?>
				</div>
			</div>
		</header>

		<div class="content">