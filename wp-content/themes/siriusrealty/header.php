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
		<script type="text/javascript" src="//use.typekit.net/tnv6dgf.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" id="font_awesome-css" href="<?php echo $url; ?>/inc/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $url; ?>/layouts/hover-effect.css" type="text/css" media="all">
		<script src="<?php echo $url; ?>/inc/header-effects/js/modernizr.custom.js"></script>
		<?php wp_head(); ?>
		<!-- REMOVE STYLING -->
		<style type="text/css" media="screen">
			html { margin-top: 0 !important; }
			@media screen and ( max-width: 0 ) {
				html { margin-top: 0 !important; }
				* html body { margin-top: 0 !important; }
			}
		</style>
	</head>
	<body <?php body_class(); ?>>
		<div class="img-wrap"><img src="<?php echo $url; ?>/images/nyc.png" /></div>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'siriusrealty' ); ?></a>
			
			<header id="masthead" class="ha-header ha-header-large site-header" role="banner">
				<div class="ha-header-perspective">
				 	<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
							<img src="<?php echo $url; ?>/images/logo-home.png" class="logo-home logo-home-mobile" />
							<img src="<?php echo $url; ?>/images/logo-nav.png" alt="<?php bloginfo( 'name' ); ?>" class="logo-nav"/>
						</a>
						<nav id="site-navigation" class="ha-header-front main-navigation" role="navigation">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					          <i class="fa fa-bars"></i>
					        </button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
					<nav id="site-footer" class="ha-header-bottom foot-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->
		
			<div id="content" class="site-content">
