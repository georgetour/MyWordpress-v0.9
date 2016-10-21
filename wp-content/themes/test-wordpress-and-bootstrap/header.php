<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Wordpress_and_Bootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<!-- Wordpress takes differently styles etc since its dynamic--->
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/css/font-awesome/font-awesome.min.css" rel="stylesheet">
	
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

	<!--HTML 5 shiv and respond.js support of HTML5 and media queries for IE8-->
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"</script>
	<![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test-wordpress-and-bootstrap' ); ?></a>

	<!-- HEADER------------------------->
	<header class="site-header" role="banner">
		<!--NAVBAR------->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
							<!--with sr-only class will show only to screen readers-->
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img class="img-logo img-responsive" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-top.png"></a>

					</div>

					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied
                    to "container".In other words it overwrites the "container" class-->
					<?php wp_nav_menu(array(
							'theme_location'    =>'primary',
							'container'         => 'nav',
							'container_class'   => 'navbar-collapse collapse',
							'menu_class'        => 'nav navbar-nav navbar-right'
						)
					)?>

				</div><!--End container---------->

			</div>

		</div><!--End navbar-->
	</header>
