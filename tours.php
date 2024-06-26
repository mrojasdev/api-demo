<?php

// Marketplace ID will be 0 for Tour Operators, non-zero for Marketplace Agents
// Agents can find their Marketplace ID in the API page in TourCMS settings
$marketplace_id = 126;

// API key will be a string, find it in the API page in TourCMS settings
$api_key = "5aed2d3d69ea";

// Timeout will set the maximum execution time, in seconds. If set to zero, no time limit is imposed.
$timeout = 0;

// Channel ID represents the Tour Operator channel to call the API against
// Tour Operators may have multiple channels, so enter the correct one here
// Agents can make some calls (e.g. tour_search()) across multiple channels
// by entering a Channel ID of 0 or omitting it, or they can restrict to a
// specific channel by providing the Channel ID
$channel = 0;

// Include the TourCMS library
include $_SERVER['DOCUMENT_ROOT'] . '/vendor/TourCMS.php';


// Create a new TourCMS instance
// Optionally alias the namespace
use TourCMS\Utils\TourCMS as TourCMS;
$tourcms = new TourCMS($marketplace_id, $api_key, 'simplexml', $timeout);

// Pagination
// Number of elements per page
$per_page = 20;
// Current page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Define search parameters
$params = array(
	"country" => "ES",
	"product_type" => "4",
	"per_page" => $per_page,
	"page" => $page
);

// Build the parameters string
$querystring = http_build_query($params);

// Query the TourCMS API
$result = $tourcms->search_tours($querystring, $channel);

?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<title>TourCMS Demo</title>
	<meta name='robots' content='noindex, nofollow' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="TourCMS WordPress Demo &raquo; Feed" href="https://wordpress.tourcms.com/feed/" />
	<link rel="alternate" type="application/rss+xml" title="TourCMS WordPress Demo &raquo; Comments Feed" href="https://wordpress.tourcms.com/comments/feed/" />
	<link rel="alternate" type="application/rss+xml" title="TourCMS WordPress Demo &raquo; Day tours Product types Feed" href="https://wordpress.tourcms.com/tours-by-type/day-tours/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wordpress.tourcms.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}};
		!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://wordpress.tourcms.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp_tourcms_theme-bootstrap-css-css'  href='https://s45105.pcdn.co/wp-content/themes/tourcms-wordpress-theme/inc/assets/css/bootstrap.min.css?ver=6.5.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp_tourcms_theme-fontawesome-cdn-css'  href='https://s45105.pcdn.co/wp-content/themes/tourcms-wordpress-theme/inc/assets/css/fontawesome.min.css?ver=6.5.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp_tourcms_theme-style-css'  href='https://s45105.pcdn.co/wp-content/themes/tourcms-wordpress-theme/style.css?ver=6.5.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp_tourcms_theme-tourcms-violet-css'  href='https://s45105.pcdn.co/wp-content/themes/tourcms-wordpress-theme/inc/assets/css/presets/theme-option/tourcms-violet.css?ver=6.5.2' type='text/css' media='all' />
	<script type='text/javascript' src='https://wordpress.tourcms.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='https://wordpress.tourcms.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<!--[if lt IE 9]>
	<script type='text/javascript' src='https://wordpress.tourcms.com/wp-content/themes/tourcms/inc/assets/js/html5.js?ver=3.7.0' id='html5hiv-js'></script>
	<![endif]-->
	<link rel="https://api.w.org/" href="https://wordpress.tourcms.com/wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wordpress.tourcms.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://wordpress.tourcms.com/wp-includes/wlwmanifest.xml" /> 
	<meta name="generator" content="WordPress 5.8.2" />
	<link rel="pingback" href="https://wordpress.tourcms.com/xmlrpc.php">    <style type="text/css">
        #page-sub-header { background: #ffffff; }
    </style>
</head>

<body class="archive tax-product-type term-day-tours term-2 hfeed theme-preset-active">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<header id="masthead" class="site-header navbar-static-top navbar-light" role="banner">
	<div class="container">
		<nav class="navbar navbar-expand-xl p-0">
			<a class="gl-link" href="https://wordpress.tourcms.com/"><span class="gl-logo"></span></a>
			<div class="navbar-brand">
				<a class="site-title" href="#">TourCMS Demo</a>    
            </div>
        </nav>
    </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div id="container">
					<div class="products-title">
						<p>Day tours</p>
					</div>
					<div class="row">

<?php

// Check if the result is OK (there is no error)
if($result->error=="OK") {

	// Calculate how many pages we have
	$pages = ceil($result->total_tour_count / $per_page);

	?>
	<p>Page <strong><?php print $page; ?></strong> of <strong><?php print $pages; ?></strong></p>
	<?php

	// If so loop through and display tours, creating a card for each element
	foreach ($result->tour as $tour) :
		?>

<!--- Desktop version of tour HTML, shown automatically at desktop resolutions -->

		<!-- Tour card for desktop resolutions -->
		<div class="col-12" id="postsdasd-49" class="post-49 tour type-tour status-publish hentry tag-inline product-type-day-tours location-berlin">
			<div class="card tour-desktop">
				<div class="tourcms-card-horizontal">
					<div class="tourcms-card-horizontal-pic">					
						<div id="c-49-d" class="carousel slide" data-interval="false">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<!-- the thumbnail image of the tour -->
									<img class="d-block w-100" src="<?php print $tour->thumbnail_image; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
					<!-- the page of the tour -->
					<a href="<?php print $tour->tour_url ?>"><span class="dummy"></span><span class="dummy-upper-right"></span></a>
					<div class="card-body">
						<div class="left">
							<!-- the location of the tour. These hrefs are kept the same because there is no example of url construction for these cases (an example for location could be printing $tour->location between "/tours-by-location/" and the last "/", but some names would need to be treated as they contain spaces instead of %20, for example. -->
							<span class="tourcms-badge-tourtype-horizontal"><a href="https://wordpress.tourcms.com/tours-by-type/day-tours/" rel="tag">Day tours</a></span><span class="tourcms-badge-location-horizontal"> <a href="https://wordpress.tourcms.com/tours-by-location/berlin/" rel="tag"><?php print $tour->location ?></a></span>
						</div>
						<div class="right price-panel">
							<!-- the tour booking page -->
							<a href="<?php print $tour->book_url ?>">
								<p class="tourcms-card-text price-label" style="">Book now</p>
								<!-- the price of the tour -->
								<!-- alternative version with decimals: <p class="tourcms-card-text price"><span class='fromprice'>from &#8364;< ?php print $tour->from_price; ?></span></p> -->
								<p class="tourcms-card-text price"><span class='fromprice'>from <?php print $tour->from_price_display; ?></span></p>
							</a>
						</div>
						<div class="card-meta-right">
							<!-- the name of the tour -->
							<h5 class="tourcms-card-title"><?php print $tour->tour_name; ?></h5>
							<!-- the summary of the tour -->
							<p class="tourcms-card-text tourcms_wp_summary"><?php print $tour->summary; ?></p>
							<!-- the duration of the tour -->
							<p class="tourcms-card-text"> <b>Duration:</b> <?php print $tour->duration_desc; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>


<!--- End Desktop tour HTML -->

<!--- Mobile version of tour HTML, shown automatically at mobile resolutions -->

		<!-- Tour card for mobile resolutions -->
		<div class="col-12 col-md-6 col-lg-4 col-xl-3">
			<div class="card tour-mobile">
				<div id="c-49-m" class="carousel slide" data-interval="false">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<!-- the thumbnail image of the tour. Although "thumbnail_image" is recommended instead of "image", I use the latter for this specific case
								 because the mobile design has bigger thumbnails and therefore could look worse with a lower image resolution if shown on bigger devices. -->
							<img class="d-block w-100" src="<?php print $tour->image; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="card-body">
					<!-- the name of the tour -->
					<a href="<?php print $tour->tour_url ?>">
						<h5 class="card-title"><?php print $tour->tour_name; ?></h5>
					</a>
					<!-- the location of the tour. These hrefs are kept the same because there is no example of url construction for these cases (an example for location could be printing $tour->location between "/tours-by-location/" and the last "/", but some names would need to be treated as they contain spaces instead of %20, for example. -->
					<div style="margin-top:-0.8rem;"><span class="badge badge-location"> <a href="https://wordpress.tourcms.com/tours-by-location/berlin/" rel="tag"><?php print $tour->location ?></a></span><span class="badge badge-tourtype"><a href="https://wordpress.tourcms.com/tours-by-type/day-tours/" rel="tag">Day tours</a></span></div>
		<!--              <p class="card-text"><i class="fas fa-history" style=""></i> <b>Duration:</b> 4 hours</p>-->
					<!-- the summary of the tour -->
					<p class="tourcms-card-text"><?php print $tour->summary; ?>"</p>
				</div>
				<div class="card-footer bg-transparent">
					<!-- the duration of the tour -->
					<p class="tourcms-card-text tour-mobile-footer-left"> <b>Duration:</b> <?php print $tour->duration_desc; ?><br></p>
					<!-- the tour booking page, the price of the tour -->
					<p class="tourcms-card-text tour-mobile-footer-right" style=""><a href="<?php print $tour->book_url ?>">Book now <span class='fromprice'>from <?php print $tour->from_price_display; ?></span></a><br></p>
				</div>
			</div>
		</div>

<!--- End Mobile tour HTML -->

		<p>
		<?php
	endforeach;

	// Basic pagination
	// Show only if not in first page
	if($page > 1)
	{
		// First page
		print '<a href="?page=1">&lt;&lt; First page &nbsp;</a>';
		// Previous page
		print '<a href="?page=' . ($page - 1) . '">&lt; Previous page &nbsp;</a>';
	}
	// Show only if not in last page
	if($page < $pages)
	{
		// Next page
		print '<a href="?page=' . ($page + 1) . '">Next page &gt; &nbsp;</a>';
		// Last page
		print '<a href="?page=' . $pages . '">Last page &gt;&gt;</a>';
	}


	?>
		</p>
	<?php

} else {
	// If not output the error
	print "There has been an error: ";
	print $result->error;
}
	
?>


</div>


<style>
@media (max-width: 768px) {
.top-breadcrumb, .tour-block, .carousel, #tourmap-2, .tourcms-card-text, .card-text {
    margin-left: 0vw !important;
    margin-right: 0vw !important;
}
}
</style>
<br/><br/><br/><br/>
				</div><!-- #container -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <footer id="colophon" class="site-footer navbar-light" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; 2021 <a href="https://wordpress.tourcms.com">TourCMS Demo</a>                <span class="sep"> | </span>
                <a class="credits" href="https://www.tourcms.com" target="_blank" title="TourCMS WordPress Support" alt="TourCMS Wordpress Theme">Palisis AG</a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript' src='https://wordpress.tourcms.com/wp-content/themes/tourcms/inc/assets/js/popper.min.js?ver=5.8.2' id='wp_tourcms_theme-popper-js'></script>
<script type='text/javascript' src='https://wordpress.tourcms.com/wp-content/themes/tourcms/inc/assets/js/bootstrap.min.js?ver=5.8.2' id='wp_tourcms_theme-bootstrapjs-js'></script>
<script type='text/javascript' src='https://wordpress.tourcms.com/wp-content/themes/tourcms/inc/assets/js/theme-script.min.js?ver=5.8.2' id='wp_tourcms_theme-themejs-js'></script>
<script type='text/javascript' src='https://wordpress.tourcms.com/wp-content/themes/tourcms/inc/assets/js/skip-link-focus-fix.min.js?ver=20151215' id='wp_tourcms_theme-skip-link-focus-fix-js'></script>
<script type='text/javascript' src='https://wordpress.tourcms.com/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
</body>
</html>
