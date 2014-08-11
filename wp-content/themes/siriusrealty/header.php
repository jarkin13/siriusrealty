<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * 
 * @package siriusrealty
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php $url = get_template_directory_uri(); ?>
		<link rel="icon" type="image/x-icon" href="<?php echo $url; ?>/images/sirius.ico" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'siriusrealty' ); ?></a>
			
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
						<img src="<?php echo $url; ?>/images/logo-nav.png" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'siriusrealty' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->
		
			<div id="content" class="site-content">
