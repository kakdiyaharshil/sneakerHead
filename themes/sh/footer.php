<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sneaker_Head
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
		$recipe_args = array(
			'post_type' 	=> array('sh_recipe'),
			'post_status' 	=> 'publish',
			'post_per_page' => 3
		);

		$recipe_query = new WP_Query( $recipe_args);

if ( $recipe_query->have_posts() ) {
	?>
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
		<?php
		while ( $recipe_query->have_posts() ){
			$recipe_query->the_post();
			the_post_thumbnail();
			the_title('<h3>', '</h3>');
			the_excerpt();
		}
		wp_reset_postdata();
		
		?>
		</div>
	</div>
	
		<?php } ?>

		<?php sh_social_media_menu(); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sh' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				
				?>
			</a>
			<span class="sep">  </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme %1$s by %2$s.', 'sh' ), 'Sneaker Head', '<a href="https://harshilkakdiya.com/">Harshil Kakdiya</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
