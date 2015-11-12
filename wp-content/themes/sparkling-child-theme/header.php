<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril+Fatface">
<?php wp_head(); ?>

<?php
	global $wp_query;
	$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<!-- Title text below -->
								<div class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
								<!-- smaller tagline text below -->
								<br />
								<div class="slogan"> Marriage, Family, Couples, and Relationship Counseling in San Diego, CA (310)795-2112</div>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							 </button>
							<div class="navbar-collapse collapse"> 
								<?php sparkling_header_menu(); // main navigation ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div class="jumbotron container-fluid">

	</div>
	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container-fluid main-content-area">
			<div class="row">

				<!-- <div id="sidebar-left" class="main-content-inner col-sm-12 col-md-3">
					<nav>
					  <?php sparkling_footer_links() ?>
					</nav>
				</div>  This will be the left sidebar --> 

				<!-- Middle content starts here. Can control size in functions.php -->
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
