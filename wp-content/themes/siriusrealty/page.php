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
<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
					<div class="inner cover">
					  <?php while ( have_posts() ) : the_post(); ?>
							<?php if( is_home() || is_front_page() ) { ?>
								<?php get_template_part( 'content', 'home' ); ?>
							<?php } else { ?>
								<?php get_template_part( 'content', 'page' ); ?>
							<?php } ?>
						<?php endwhile; // end of the loop. ?>
					</div>
			</div>
		</div>
</div>
<?php get_footer(); ?>