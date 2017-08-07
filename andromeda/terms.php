<?php
/*
Template Name: Terms, Privacy, Disclaimer
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content() ;?>
				</div><!-- class="entry" -->
			</div><!-- class="post" -->

			<div class="separator"></div>
		<?php endwhile; ?>

	<?php else: ?>
		<h3>Sorry The Page Have Been Removed</h3>
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

