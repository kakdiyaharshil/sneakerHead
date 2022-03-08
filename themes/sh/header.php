<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sneaker_Head
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sh' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if( !empty (get_custom_logo() ) ) {
				the_custom_logo( );
			} else {
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sh_description = get_bloginfo( 'description', 'display' );
			if ( $sh_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sh_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; 
			}
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sh' ); ?></button>
			<?php
			if(has_nav_menu( 'menu-primary' )) {
				wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
				)
			);
		}

	// 	if(has_nav_menu( 'menu-social' )) {
	// 		wp_nav_menu(
	// 		array(
	// 			'theme_location' => 'menu-social',
	// 		)
	// 	);
	// }
			?>

			<ul class="social-medoa-menu">
				<?php if(! empty(get_theme_mod('sh_facebook_url'))&& ! empty(get_theme_mod('sh_facebook_title') ))  {?>
				<li>
					<a href="<?php echo esc_url (get_theme_mod('sh_facebook_url')); ?>">
					<?php
					if ( ! empty(get_theme_mod('sh_facebook_icon') ) ){
					echo wp_get_attachment_image( get_theme_mod('sh_facebook_icon'));
					}	else{
						echo get_theme_mod('sh_facebook_title'); 
					}
					 ?>
					 </a>
				</li>
				<?php } ?>
			</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
