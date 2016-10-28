<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo( bloginfo('name') ). ' '; wp_title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php  bloginfo('template_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/assets/css/main.css" />
		<?php wp_head(); ?>
	</head>
	<body>
	
	<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
					    <span class="logo"><?php the_custom_logo(); ?></span>
						<h1><?php bloginfo('name'); ?></h1>
						<p><?php bloginfo('description') ?></p>
					</header>

            <nav id="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

					</nav>