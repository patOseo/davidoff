<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<header class="home-header">
	<div class="home-callout">
		<div class="home-heading"><?php the_field('top_heading'); ?></div>
		<div class="home-ctas row">
			<div class="col-md-6"><a href="tel:<?php the_field('phone_number', 'option'); ?>" class="btn btn-lg btn-white"><?php the_field('phone_number', 'option'); ?></a></div>
			<div class="col-md-6"><a href="/book-an-estimate/" class="btn btn-lg btn-white">Book an Estimate</a></div>
		</div>
	</div>
	<div class="video-button" id="watchVideo">
		<img src="/wp-content/themes/davidoff/images/youtube.png" alt="Davidoff Roofing on YouTube">
		<p>Watch Video</p>
	</div>
</header>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div>

	<div class="container">
		<div class="row service-row">
			<div class="col-md-5">
				<?php $image1 = get_field('service_1_image'); ?>
				<?php if(!empty($image1)): ?>
					<img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>">
				<?php endif; ?>
			</div>

			<div class="col-md-7">
				<a href="<?php the_field('service_1_link'); ?>"><h2><?php the_field('service_1_title'); ?></h2></a>
				<p><?php the_field('service_1_content'); ?></p>
			</div>
		</div>
	</div>

	<div class="cta-divider">
		<a href="https://colorview.certainteed.com/" target="_blank" rel="noopener,noreferrer,nofollow"><span>Wonder what your home would look like with Certainteed’s shingles? Click here to find out!</span></a>
	</div>

	<div class="container">
		<div class="row service-row">
			<div class="col-md-7">
				<a href="<?php the_field('service_2_link'); ?>"><h2><?php the_field('service_2_title'); ?></h2></a>
				<p><?php the_field('service_2_content'); ?></p>
			</div>
			<div class="col-md-5">
				<?php $image2 = get_field('service_2_image'); ?>
				<?php if(!empty($image2)): ?>
					<img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
				<?php endif; ?>
			</div>
		</div>
	</div><!-- #content --> 

	<div class="container">
		<div class="row service-row">
			<div class="col-md-12">
				<h2><?php the_field('service_3_title');  ?></h2>
				<p><?php the_field('service_3_content'); ?></p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="news-updates">
			<h2>News & Updates</h2>
			<?php get_template_part('loop-templates/loop', 'news'); ?>
		</div>
	</div>

	<div class="container">
		<div class="home-logos">
			<img src="/wp-content/themes/davidoff/images/cca-logos.jpg" alt="Consumer Choice Awards">
			<a href="https://www.labour.gov.on.ca/english/resources/roofing.php" target="_blank" rel="noopener,noreferrer,nofollow"><img src="/wp-content/themes/davidoff/images/ontario-ministry-labour.jpg" alt="Important Information About Hiring a Roofer"></a>
		</div>
	</div>

</div><!-- #page-wrapper -->
<div class="video-container">
	<div class="video-close"><i class="fa fa-times"></i></div>
	<div class="video-box">
		<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/KfU2A_kWtgA' frameborder='0' allowfullscreen></iframe></div>
	</div>
</div>
<script>
jQuery(function($){
	$("#watchVideo").click(function(){
		$(".video-container").fadeIn();
	});
	$(".video-close").click(function(){
		$(".video-container").fadeOut();
	});
});
</script>
<?php
get_footer();
