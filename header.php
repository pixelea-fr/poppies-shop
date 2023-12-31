<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text visually-hidden" href="#main-content"><?php esc_html_e('Aller au contenu', 'poppies'); ?></a>

		<div class="hidden" hiddden>
			<?php get_template_part( 'dist/img/sprite.svg' ); ?>
		</div>
		
		<header id="masthead" class="header" role="banner">
			<div class="container etiq">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->

				<?php get_template_part( 'template-parts/navigation/primary' ); ?>

		</header><!-- #masthead -->

		<main id="main-content" role="main">