<div class="sidebar-1 sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			<?php // display static sidebar ?>

			<li>
				<h2>Blogroll</h2>
				<ul>
					<?php get_links(-1, '<li>', '</li>', ' - '); ?>
				</ul>
			</li>
		<?php endif; ?>
	</ul>
</div><!-- class="sidebar-1 sidebar" -->

