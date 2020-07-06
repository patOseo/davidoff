<?php
/**
 * Default template for displaying all pages.
 *
 * 
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
<div class="page-header">
	<h1><?php the_title(); ?></h1>
	<span><?php if($subtitle): echo $subtitle; endif; ?></span>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
