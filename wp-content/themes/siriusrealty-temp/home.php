<?php /**
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
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!--START CONTENT -->
		<div class="large-image clear">
			<img src="<?php echo $url; ?>/images/large2.png" alt="Welcome to Sirius Realty" width="720">
		</div>
		<ul class="bottom-nav">
			<li>
				<a href="/category/for-rent/">
					<img src="<?php echo $url; ?>/images/small1.png" alt="Sirius Realty For Rent" width="220">
				</a>
			</li>
			<li>
				<a href="/category/for-sale/">
					<img src="<?php echo $url; ?>/images/small2.png" alt="Sirius Realty For Sale" width="220">
				</a>
			</li>
			<li>
				<a href="/about-us/">
					<img src="<?php echo $url; ?>/images/small3.png" alt="Sirius Realty For Sale" width="220">
				</a>
			</li>
		</ul>
		<!--END CONTENT -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
