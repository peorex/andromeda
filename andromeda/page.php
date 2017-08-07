<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<div class="ad">
		<?php place_ads ('google-f00/fff/f00-468x15'); ?>
	</div>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="meta">
					Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
				</div>

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

