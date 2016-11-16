<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the
 * "off-canvas-content" div, and includes the site header.
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?><!DOCTYPE html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="MilanoWP, starter theme for WordPress with Foundation">
    <meta name="author" content="Carlo Rizzante"><!-- Your name here! -->

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#2199E8">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icons/win8-tile-icon.png">
	    <meta name="theme-color" content="#2199E8">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Manually drop Google Analytics here (or alternatively use a plugin) -->

	</head>

	<body <?php body_class("fixed-top-navigation"); ?>>

    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <?php get_template_part( 'parts/navs/nav', 'default' ); ?>
        <!-- For different menu types see parts/nav/... -->

		    <div class="off-canvas-content" data-off-canvas-content>
					<header class="header" role="banner">
            <!-- Use this area for big hero banners, carousels, sliders, etc... -->
					</header> <!-- END .header -->
