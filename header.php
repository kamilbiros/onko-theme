<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onko-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<!-- Custom Fonts -->
	<link href="<?php bloginfo('stylesheet_directory')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Theme CSS -->
	<link href="<?php bloginfo('stylesheet_directory')?>/css/freelancer.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
    	<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
	    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        Menu
	    	<i class="fas fa-bars"></i>
	    </button>

	    <?php
	        wp_nav_menu([
	            'menu'            => 'primary',
	            'theme_location'  => 'menu-1',
	            'container'       => 'div',
	            'container_id'    => 'navbarResponsive',
	            'container_class' => 'collapse navbar-collapse',
	            'menu_id'         => false,
	            'menu_class'      => 'navbar-nav ml-auto',
	            'depth'           => 0,
	            'fallback_cb'     => 'bs4navwalker::fallback',
	            'walker'          => new bs4navwalker()
	        ]);
	    ?>
    </div>
</nav>

<div id="page" class="site">
