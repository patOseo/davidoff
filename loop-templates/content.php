<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-md-4">
	<a href="<?php the_permalink(); ?>">
		<div class="news-box">
			<h3><?php the_title(); ?></h3>
			<div class="news-date"><?php the_date('F j, Y'); ?></div>
			<hr class="divider">
			<p><!-- With things changing rapidly, we are making some changes for booking estimates to keep homeowners and our staff safe. --><?php the_excerpt(); ?></p>
		</div>
	</a>
</div>