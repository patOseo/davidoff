<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$header_bg = get_field('header_background_image');
$default_bg = get_field('default_header_background_image', 'option');
$subtitle = get_field('header_subtitle');
if($header_bg) { 
	$bgimg = $header_bg; 
}
else {
	$bgimg = $default_bg;
}
?>
<style>
.page-header:before {background: linear-gradient(#173354,#173354), url('<?php echo $bgimg; ?>') no-repeat center center;background-color:white;background-size:cover;}
</style>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="page-header">
	<h1>News & Updates</h1>
</div>
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		
		<div class="news-updates">
<!-- 			<h1>News & Updates</h1> -->
			<div class="row">
				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					} ?>
					
						
					
				<?php } else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
			</div><!-- .row -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
		</div>
			

		

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
