<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package siriusrealty
 */
 $url = get_template_directory_uri();
?>


	<img src="<?php echo $url; ?>/images/logo-home.png" class="logo-home" />
	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>


