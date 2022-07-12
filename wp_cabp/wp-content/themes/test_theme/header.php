<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
<div id="page" class="site">
<nav id="site-navigation" class="main-navigation nav-bar">
				<?php the_custom_logo(); ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test_theme' ); ?></button>
					<div style="top: 3vh;
					    left: 2vw;
					    position: absolute;
					    display: flex;">
					<?php if ( !is_front_page() && !is_home() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://161.246.38.35/~it61070070/wp_cabp/wp-content/uploads/2019/05/70429.png" style="
					    max-width: 21px;
					"></a>
					<?php
				endif;?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="logo" style="color: white;"><?php bloginfo( 'name' ); ?></a>
			</div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
