<?php
/**
 * The template for the home page.
 *
 * @package siriusrealty
 */
 
$url = get_template_directory_uri();
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img src="<?php echo $url; ?>/images/logo-home.png" class="logo-home" />
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
