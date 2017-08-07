<?php
/*
Template Name: Home Page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?></title>
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


<div class="content">
	<h1 style="font-size: 3.4em; color: #f00; text-align: center; font-family: sans-serif;">Getting Traffic to your<br />New Website</h1>

	<div style="font-size: 1.4em; line-height: 1.17em;">
So you&#8217;ve <font style="font-size: 1.1em; background-color: #ff0;">just finished</font> creating <font style="color: #f00; text-decoration: underline;">YOUR NEW WEBSITE</font>. It looks good and you are ready for the <b>visitors</b>, you can&#8217;t wait for the <font style="color: #f00; text-decoration: underline;">traffic</font> to come. So how are you going to get traffic to your new site? You will now need to promote your new site. <font style="color: #f00; text-decoration: underline; font-size: 1.2em; background-color: #ff0;">Here are a few things you could start with:</font>
	</div>

	<br />

	<div style="text-align: center;">
<font style="color: #f00; text-decoration: underline;">For more information please fill out this form:</font>
	</div>

<!---START OF ADD FORM-->
<div class="signup-form">
<form action="http://freeautobot.com/cgi-bin/autores/autores.cgi">
<input type="hidden" name="do" value="add_lead_external" />
<input type="hidden" name="Username" value="jetix" />
<input type="hidden" name="Stop_Status" value="Active" />
<input type="hidden" name="Cycle_Number" value="0" />
<input type="hidden" name="Success_URL" value="http://freeautobot.com" />
<input type="hidden" name="Failure_URL" value="http://freeautobot.com/Failure.html" />
<input type="hidden" name="Notes" value="Added from opt-in form" />

<table><tbody>
<tr><td>&nbsp;Your Name:</td><td><input type="text" name="Name" class="text-field" value="" /></td></tr>
<tr><td>&nbsp;Your Email:</td><td><input type="text" name="Email" class="text-field" value="" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="submit" value="Subscribe" /></td></tr>
</tbody></table>

</form>
</div>
<!---END OF ADD FORM-->

You will get access to the entire article immediately and completely free. Just fill the form above. You will receive email request to confirm your subscription. Once you confirm your subscription you will receive another email with a link to the article.<br />
<br />
We respect your privacy. We will never reveal your email address to third parties.<br />


	<div class="separator"></div>
	<div class="separator"></div>
	<div class="separator"></div>
	<div class="separator"></div>

</div><!-- class="content" -->







<div class="footer">
	<p>
	Copyright &copy; 2007 - <?php the_time('Y'); ?> StoneStreem.com, All Rights Reserved. | <a href="<?php bloginfo('url'); ?>/privacy/" rel="nofollow">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/terms/" rel="nofollow">Terms of Use</a> <br />
	</p>
</div>

</div><!-- class="main" --><?php // opened in header.php ?>

<?php tracking_code (); ?>

</body>
</html>








