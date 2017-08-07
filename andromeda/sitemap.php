<?php
/*
Template Name: Sitemap
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
		<div class="post" id="archives-sitemap">
			<h2>All internal pages:</h2>
			<div class="entry">
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div><!-- class="entry" -->

			<div class="separator"></div>

			<h2>All internal blog posts:</h2>
			<div class="entry">
				<ul>
					<?php $archive_query = new WP_Query('showposts=1000');
					while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
						<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> (<?php comments_number('0', '1', '%'); ?>)</li>
					<?php endwhile; ?>
				</ul>
			</div><!-- class="entry" -->

			<div class="separator"></div>

			<h2>Available RSS Feeds:</h2>
			<div class="entry">
				<ul>
					<li><a href="<?php bloginfo('rdf_url'); ?>" title="RDF/RSS 1.0 feed"><acronym title="Resource Description Framework">RDF</acronym>/<acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
					<li><a href="<?php bloginfo('rss_url'); ?>" title="RSS 0.92 feed"><acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 feed"><acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
					<li><a href="<?php bloginfo('atom_url'); ?>" title="Atom feed">Atom feed</a></li>
				</ul>
			</div><!-- class="entry" -->
			<div class="separator"></div>
		</div><!-- class="post" -->
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

