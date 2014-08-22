<?php /**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package siriusrealty
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php $url = get_template_directory_uri(); ?>
		<link rel="icon" type="image/x-icon" href="<?php echo $url; ?>/images/sirius.ico" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="//use.typekit.net/tnv6dgf.js"></script>
		<script type="text/javascript">
      try {
        Typekit.load();
      } catch(e) {
      }
		</script>
    <!-- REMOVE STYLING -->
		<style type="text/css" media="screen">
			html { margin-top: 0 !important; }
			#wpadminbar {display: none;}
			@media screen and ( max-width: 0 ) {
				html { margin-top: 0 !important; }
				* html body { margin-top: 0 !important; }
			}
		</style>
		<link rel="stylesheet" id="font_awesome-css" href="<?php echo $url; ?>/inc/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>/inc/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  	<body <?php body_class(); ?>>
			<div class="navbar navbar-default navbar-sirius navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
	            <img src="<?php echo $url; ?>/images/logo-home.png" class="logo-home logo-home-mobile" />
	            <img src="<?php echo $url; ?>/images/logo-nav.png" alt="<?php bloginfo('name'); ?>" class="logo-nav"/>
	          </a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <?php header_menus('primary'); ?>
	        </div><!--/.nav-collapse -->
	      </div>
    	</div>
    	<div class="img-wrap"><img src="<?php echo $url; ?>/images/nyc.png" /></div>
		
    

    