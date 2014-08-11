<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package siriusrealty
 */
$url = get_template_directory_uri();
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if( is_home() || is_front_page() ) { ?>
				<img src="<?php echo $url; ?>/images/logo-home.png" class="logo-home" />
			<?php } ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if( is_home() || is_front_page() ) { ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					
				<?php } else { ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php } ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
