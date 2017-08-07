<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar(2); ?>

<div class="content">
	<div class="ad">
		<?php place_ads ('google-f00/fff/f00-468x15'); ?>
	</div>

	<?php
// This also populates the iconsize for the next line
	$attachment_link = get_the_attachment_link($post->ID, true, array(450, 800));
// This lets us style narrow icons specially
	$_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment';
	?>

	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="entry" id="<?php echo $classname; ?>">
					<?php echo $attachment_link; ?><br />
					<p>This is an image of <?php the_title(); ?></p>
				</div><!-- class="entry" -->
			</div><!-- class="post" -->

			<div class="separator"></div>
		<?php endwhile; ?>

		<div class="separator"></div>

	<?php else: ?>
		<h3>Sorry The Attachment Have Been Removed</h3>
	<?php endif; // if (have_posts()) ?>
</div><!-- class="content" -->

<?php get_footer(); ?>

