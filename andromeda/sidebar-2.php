<div class="sidebar-2 sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			<?php // display static sidebar ?>

			<li>
				<h2>Categories</h2>
				<ul>
					<?php wp_list_cats('sort_column=name&optioncount=0'); ?>
				</ul>
			</li>
			<li>
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
		<?php endif; ?>
	</ul>
</div><!-- class="sidebar-2 sidebar" -->

