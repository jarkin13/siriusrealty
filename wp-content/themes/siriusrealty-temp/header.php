<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package siriusrealty
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/css?family=Fenix|Quicksand:300,400,700" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
<?php $url = get_template_directory_uri(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'siriusrealty' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo $url; ?>/images/sirius-realty-logo.png" />
			</a>
		</div>
		<?php if(!is_home() || !is_front_page()){ ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'siriusrealty' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php } ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
	