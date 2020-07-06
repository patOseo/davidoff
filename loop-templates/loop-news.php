<?php  

$args = array(
	'posts_per_page' => 3,
);

$query = new WP_Query($args);

?>

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