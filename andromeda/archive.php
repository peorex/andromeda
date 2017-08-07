<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<div class="ad">
		<?php place_ads ('google-f00/fff/f00-468x15'); ?>
	</div>

	<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php
			if (is_category())	// If this is a category archive
			{
 ?>
				<h2>Archive for the '<?php echo single_cat_title(); ?>'</h2>
<?php
			}
			elseif (is_day())	// If this is a daily archive
			{
?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
<?php
			}
			elseif (is_month())	// If this is a monthly archive
			{
?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>
<?php
			}
			elseif (is_year())	// If this is a yearly archive
			{
 ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>
<?php
			}
			elseif (is_search())	// If this is a search
			{
?>
				<h2>Search Results</h2>
<?php
			}
			elseif (is_author())	// If this is an author archive
			{
?>
				<h2>Author Archive</h2>
<?php
			}
			// If this is a paged archive
			elseif (isset($_GET['paged']) && !empty($_GET['paged']))
			{
?>
				<h2>Blog Archives</h2>
<?php
			}
?>

		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="meta">
					Posted in <strong><?php the_time('F jS, Y') ?></strong> <?php edit_post_link('Edit', '&#124; ', ''); ?>
				</div>

				<div class="meta">
					by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?>
				</div>

				<div class="entry">
					<?php the_excerpt(','); ?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Continue reading...</a></p>
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
				</div><!-- class="entry" -->

				<div class="navigation">
					<div class="button">
						<?php comments_popup_link('Add Comment', '1 Comment', '% Comments'); ?>
					</div>
				</div>
			</div><!-- class="post" -->

			<div class="separator"></div>
		<?php endwhile; ?>

		<div class="navigation">
			<?php if (function_exists('wp_pagenavi')): ?>
				<?php wp_pagenavi(); ?>
			<?php else : ?>
				<?php posts_nav_link(' &nbsp;&nbsp; &#8212; &nbsp;&nbsp; '); ?>
			<?php endif; ?>
		</div>

		<div class="separator"></div>

	<?php else: ?>
		<h3>Sorry The Archives Have Been Removed</h3>
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

