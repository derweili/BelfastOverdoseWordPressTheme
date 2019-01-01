<?php
/*
Template Name: Front
*/

get_header(); ?>

<div class="front-hero">
	<a href="https://fanlink.to/belfastoverdose" target="_blank">
		<?php the_post_thumbnail('large'); ?>
		<h1>Out now</h1>
	</a>
</div>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php
get_footer();
