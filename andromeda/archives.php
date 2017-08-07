<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<div class="ad">
		<?php place_ads ('google-f00/fff/f00-468x15'); ?>
	</div>

	<?php if (have_posts()) : ?>
		<div class="post" id="archives-category">
			<h2><?php _e('Archives by Category') ?></h2>
			<div class="entry">
				<ul>
					<?php wp_list_cats('sort_column=name&optioncount=1&feed=RSS') ?>
				</ul>
			</div><!-- class="entry" -->

			<div class="separator"></div>

			<h2><?php _e('Archives by Month') ?></h2>
			<div class="entry">
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=1') ?>
				</ul>
			</div><!-- class="entry" -->

			<div class="separator"></div>

			<h2>Last Twelve Months</h2>
			<div class="entry">
				<ul>
					<?php get_archives('postbypost', 20); ?>
				</ul>
			</div><!-- class="entry" -->
			<div class="separator"></div>
		</div><!-- class="post" -->
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

