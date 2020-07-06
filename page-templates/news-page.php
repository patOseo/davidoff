<?php
/**
 * Template Name: News Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$args = array(
	'posts_per_page' => 12,
);

$query = new WP_Query($args);

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php if($query->have_posts()): ?>
					<div class="row">
						<?php while($query->have_posts()): $query->the_post(); ?>
							<div class="col-md-4">
								<a href="<?php the_permalink(); ?>">
									<div class="news-box">
										<h3><?php the_title(); ?></h3>
										<div class="news-date"><?php the_date('F j, Y'); ?></div>
										<hr class="divider">
										<p>With things changing rapidly, we are making some changes for booking estimates to keep homeowners and our staff safe.</p>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
