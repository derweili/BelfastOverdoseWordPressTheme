<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero text-center" role="banner" >
		<?php the_post_thumbnail('large'); ?>
	</header>
<?php endif;
