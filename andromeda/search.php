<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<div class="ad">
		<?php place_ads ('google-f00/fff/f00-468x15'); ?>
	</div>

	<?php if (have_posts()) : ?>
		<h3>Search Result For &quot;<?php the_search_query(); ?>&quot;</h3>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="meta">
					Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
				</div>

				<div class="meta">
					by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?>
				</div>

				<div class="entry">
					<?php the_excerpt(','); ?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read more from this search...</a></p>
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

		<div class="separator"></div>

		<div class="navigation">
			<?php if (function_exists('wp_pagenavi')): ?>
				<?php wp_pagenavi(); ?>
			<?php else : ?>
				<?php posts_nav_link(' &nbsp;&nbsp; &#8212; &nbsp;&nbsp; '); ?>
			<?php endif; ?>
		</div>

		<div class="separator"></div>

	<?php else: ?>
		<h3>Sorry We Do Not Found Anything Match Your Search</h3>
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

