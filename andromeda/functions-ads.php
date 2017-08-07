<?php // must be first line!

// config start
define('MY_LOCAL_IP_ADDR', '127.0.0.1');
define('MY_REMOTE_IP_ADDR', '84.238.140.75');	// adjust yo yours
// config end





$ads_arr = array (

	'google-f00/fff/f00-468x15' => array (	// in use
		'width'  =>	468,
		'height' =>	15,
		'entry'  => '
<script type="text/javascript"><!--
google_ad_client = "pub-1960015146448661";
/* google-f00/fff/f00-468x15 */
google_ad_slot = "9402159952";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			'),

	'google-blue/white-468x60' => array (	// in use
		'width'  =>	468,
		'height' =>	60,
		'entry'  => '
<script type="text/javascript"><!--
google_ad_client = "pub-1960015146448661";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "333333";
google_color_text = "333333";
google_color_url = "80856B";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			'),

	"google-blue-468x60-2" => array (	// test
		"width"  =>	468,
		"height" =>	60,
		"entry"  => '
<script type="text/javascript"><!--
google_ad_client = "pub-1960015146448661";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "333333";
google_color_text = "333333";
google_color_url = "80856B";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			'),

	"google-blue-90x10" => array (		// test
		"width"  =>	90,
		"height" => 	10,
		"entry" =>	' 98t-90x10-here-d76 '
	),

	"google-blue-468x60" => array (		// test
		"width"  =>	468,
		"height" =>	60,
		"entry"  => '
<script type="text/javascript"><!--
google_ad_client = "pub-1960015146448661";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "333333";
google_color_text = "333333";
google_color_url = "80856B";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			'),

// -------------------------
	"terminator" => 0
); // $ads_arr = array (...)












// includes Ads depending on visitor IP
// $show = 0	never
// $show = 1	always
// $show = X	depend on visitor IP
function place_ads ($ad_name = '', $show = '', $cmnt = 'Ads by Google')
{
	global $ads_arr;

	if (!array_key_exists($ad_name, $ads_arr) || ($show == '0') || is_front_page())
		return;

	echo "\n<!-- $cmnt -->\n";

	if ( !is_my_IP() || ($show == '1'))
		echo $ads_arr[$ad_name]["entry"];	// show ad
	else
	{
		$width = $ads_arr[$ad_name]["width"];
		$height = $ads_arr[$ad_name]["height"];
?>
		<div style="
			margin: 0px;
			border: 2px solid #00f;
			padding: 2px; 0px;
			width: <?php echo $width - 8; ?>px;
			height: <?php echo $height - 8; ?>px;

			background-color: #ccf;

			color: #009;
			text-align: center;
			">
			Ads go here <?php echo "{$width}x{$height}"; ?>
		</div>
<?php
	}
} // function place_ads (...)






// includes tracking code depending on visitor IP
// $show = 1	always
// $show = X	depend on visitor IP
function tracking_code ($show = '')
{
	if ( !is_my_IP() || ($show == '1')) :
?>

<!-- Start of Tracking Code -->
<script type="text/javascript" language="javascript"
 src="http://stonestreem.com/js/track.js"></script>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2570090-1";
urchinTracker();
</script>
<!-- End of Tracking Code -->

<?php	endif; // if ( !is_my_IP() || ($show == '1'))


	if (is_my_IP()) :
?>

<!-- Start of Mouse-XY Code -->
<script type="text/javascript" language="javascript"
 src="http://stonestreem.com/js/mouse-xy.js"></script>
<!-- End of Mouse-XY Code -->

<?php	endif; // if (is_my_IP())

} // function tracking_code (...)






// includes Ads by Google depending on visitor IP
function ads_by_google_not_used ($ad_name = '', $width = 468, $height = 60)
{
// config start
	$my_local_IP_addr = '127.0.0.1';
	$my_remote_IP_addr = '84.238.140.75';	// adjust yo yours
// config end


	if (	($_SERVER['REMOTE_ADDR'] == $my_local_IP_addr) ||
		($_SERVER['REMOTE_ADDR'] == $my_remote_IP_addr) ) :
?>
		<div style='width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; background-color: #CCCCFF; border:1px solid #0000FF; margin: 0px auto; text-color: #0000FF; text-align: center;'>
			Ads by google goes here
		</div>

<?php	else: ?>

<script type="text/javascript"><!--
google_ad_client = "pub-1960015146448661";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "333333";
google_color_text = "333333";
google_color_url = "80856B";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php	endif; // if ($_SERVER['REMOTE_ADDR'] == ...)
} // function ads_by_google (...)







function is_my_IP ()
{
	if (	($_SERVER['REMOTE_ADDR'] == MY_LOCAL_IP_ADDR) ||
		($_SERVER['REMOTE_ADDR'] == MY_REMOTE_IP_ADDR) )
		return true;
	return false;
}













// used for test purposes only. not called from WordPress
function test_function ($ad_name = 'nams def.', $width = 468, $height = 60)
{
// config
	$my_local_IP_addr = '127.0.0.1';
	$my_remote_IP_addr = '84.238.140.75';
	$test = '';
// end config

	if ($width == 468)
	{
?>
		<h1>Width is 468</h1>
<?php	}

	if ($height == 60)
	{
?>
		<h1>Height is 60</h1>
<?php	} ?>

	<h2>Widht equal to <?php echo $width; ?></h2>
	<h2>Height equal to <?php echo $height; ?></h2>
	<h1>Ad Name is set to <?php echo $ad_name; ?></h1>
	<h3>TEMPLATEPATH is <?php echo TEMPLATEPATH; ?></h3>

	<div style='width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; background-color: #CCCCFF; border:1px solid #0000FF; float: left; text-color: #0000FF; text-align: center;'>
		Ads by google goes here
	</div>

<?php	if (
		($_SERVER['REMOTE_ADDR'] == $my_local_IP_addr) ||
		($_SERVER['REMOTE_ADDR'] == $my_remote_IP_addr) ) :
?>
		<h1>IP is 127.0.0.1</h1>
<?php	else: ?>
		<h3>Sorry The Post Have Been Removed</h3>
<?php	endif; // if ($_SERVER['REMOTE_ADDR'] == ...)
} // function test_function (...)






?>