<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<title><?php
	if (wp_title('', false) != '')	// separator, display
	{
		// use post title
		wp_title('');
	}
	else
	{
		// title empty, use general vals
		bloginfo('name');
		if (get_option('blogdescription') != '')
		{
			echo ' - ';
			bloginfo('description');
		}
	}
?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-language" content="EN" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="<?php bloginfo('wpurl'); ?>/wp-content/logo.gif" type="image/x-icon" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>
</head>


<body>
<div class="main"><?php // closed in footer.php ?>

<div class="header">
	<div class="logo">
		<a href="<?php bloginfo('url'); ?>/">
		<img src="<?php bloginfo('wpurl'); ?>/wp-content/logo.gif" alt="Home" />
		</a>
	</div>

	<div class="title">
		<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
	</div>

	<div class="meta">
		<?php bloginfo('description'); ?>
	</div>
</div><!-- class="header" -->

<div class="navigation">
	<ul>
		<?php //	<li><a href="http://stonestreem.com/">Home</a></li> ?>
		<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
		<?php wp_list_pages('title_li=&meta_key=list&meta_value=yes&depth=1'); ?>
	</ul>

	<form method="get" action="<?php // echo $_SERVER['PHP_SELF']; ?>/index.php">
		<input class="textfield" name="s" type="text" value="<?php the_search_query(); ?>" />
		<input class="submit" name="submit" type="submit" value="Search" />
	</form>
</div><!-- class="navigation" -->

