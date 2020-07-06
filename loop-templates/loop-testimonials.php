<?php if(have_rows('testimonials', 'option')): ?>

<div class='testimonials'>
	<?php while(have_rows('testimonials', 'option')): the_row(); ?>

		<div class="single-testimonial">
			<i class="fa fa-quote-left"></i>
			<p><i><?php the_sub_field('testimonial'); ?></i></p>
			<hr class="divider">
			– <?php the_sub_field('client_name'); ?>
		</div>

	<?php endwhile; ?>
</div>

<script>
(function($){
	$('.testimonials').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  cssEase: 'linear'
	});
});
</script>

<?php endif;