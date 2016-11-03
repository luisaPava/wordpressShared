<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-theme.min.css" />
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>

</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header" role="banner">
		<div class="row">
		  <div class="col-md-4"><h3>Home</h3></div>
		  <div class="col-md-4"><h3>Faxina</h3></div>
		  <div class="col-md-4"><h3>Elétrica</h3></div>
		</div>
	</header><!-- #masthead -->
