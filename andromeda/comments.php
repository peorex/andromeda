<?php // Do not delete these lines

if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password))	// if there's a password
{
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password)
	{
		// and it doesn't match the cookie
?>
		<h3><?php _e("This post is password protected. Enter the password to view comments."); ?></h3>
<?php
		return;
	}
}

$oddcomment = '';
?>

<div class="comment">
<?php
	if (get_comments_number($id) != 0)
	{
?>
		<h3 id="comments"><?php comments_number('Leave a Reply', 'One Response', '% Responses');?> to &quot;<?php the_title(); ?>&quot;</h3>
<?php
	}
?>
	<span class="rssfeed">
		Follow-up responses to this entry through the <?php comments_rss_link('RSS'); ?> feed, <a href="#respond">Leave a Reply</a> or <a href="<?php trackback_url(display); ?>">Trackback</a> from your own site.
	</span>
	<div class="separator"></div>

<?php // Ads by Google ?>
	<div class="ad"><?php place_ads ('google-blue/white-468x60'); ?></div>

	<div class="separator"></div>

	<?php if ($comments) : ?>
		<?php foreach ($comments as $comment) : ?>
			<?php $oddcomment = (empty ($oddcomment)) ? ' class="alt"' : ''; ?>

			<div<?php echo $oddcomment; ?> id="comment-<?php comment_ID() ?>">
				<div class="meta">
					<?php comment_author_link(); ?> said,
					<div class="date">
						in <?php comment_date('F jS, Y') ?> at <?php comment_time() ?> <?php edit_comment_link('edit','',''); echo "\n" ?>
					</div>
				</div><!-- class="meta" -->

				<div class="entry">
					<?php comment_text() ?>
				</div><!-- class="entry" -->
			</div><!-- class="alt ?" "id=..." -->

			<div class="separator"></div>

		<?php endforeach; /* end for each comment */ ?>
	<?php endif; // if ($comments) ?>

	<?php if ('open' == $post->comment_status) : ?>
		<?php if (get_option('comment_registration') && !$user_ID) : ?>

		<?php else : ?>
<?php // Ads by Google ?>
			<div class="ad"><?php place_ads ('google-blue/white-468x60'); ?></div>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
				<h3 id="respond">Leave a Reply</h3>

				<?php if (!$user_ID) : ?>
					<p><input class="textfield" name="author" type="text" value="<?php echo $comment_author; ?>" />&nbsp;Username (*required)</p>
					<p><input class="textfield" name="email" type="text" value="<?php echo $comment_author_email; ?>" />&nbsp;Email Address (*private)</p>
					<p><input class="textfield" name="url" type="text" value="<?php echo $comment_author_url; ?>" />&nbsp;Website (*optional)</p>
				<?php endif; // if (!$user_ID) ?>

				<p><textarea name="comment" cols="50%" rows="8"></textarea></p>
				<p><input class="submit" name="submit" type="submit" value="Post My Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

				<?php do_action('comment_form', $post->ID); ?>
			</form>
		<?php endif; // if (get_option(...) If registration required and not logged in ?>
	<?php endif; // if ('open' == $post...) if you delete this the sky will fall on your head ?>
	<div class="separator"></div>
</div><!-- class="comment" -->

