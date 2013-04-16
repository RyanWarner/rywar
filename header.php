<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="//use.typekit.net/bws2lev.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta charset="utf-8">
	<title>
		<?php
	      if (function_exists('is_tag') && is_tag()) {
	         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
	      elseif (is_archive()) {
	         wp_title(''); echo ' Archive - '; }
	      elseif (is_search()) {
	         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
	      elseif (!(is_404()) && (is_single()) || (is_page())) {
	         wp_title(''); echo ' - '; }
	      elseif (is_404()) {
	         echo 'Not Found - '; }
	      if (is_home()) {
	         bloginfo('name'); echo ' - '; bloginfo('description'); }
	      else {
	          bloginfo('name'); }
	      if ($paged>1) {
	         echo ' - page '. $paged; }
	   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/master.css" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrap">
		<header>
			<div id="header_content">
				<div class="center">
					<div id="diamond">D</div>
					<div id="rywar"><a href="<?php echo home_url(); ?>">Rywar</a></div>
					<div id="tagline">
						<div class="green"><?php bloginfo('description'); ?></div>
						<div class="red"><?php bloginfo('description'); ?></div>
					</div>
				</div>
			</div>
		</header>
		<div id="the_content">
			<span class="center">
				<div id="social_icons">
					<?php // these should be dynamic but I'm too cheap to pay for the ACF addon (embarassing... this needs to change) ?>
					<a href="http://twitter.com/_rywar" class="social_icon" id="twitter">t</a>
					<a href="http://dribbble.com/rywar" class="social_icon" id="dribbble">d</a>
					<a href="http://github.com/RyanWarner" class="social_icon" id="github">g</a>
					<a href="http://linkedin.com/pub/ryan-warner/4b/318/b47/" class="social_icon" id="linkedin">l</a>
					<a href="http://rywar.tumblr.com/" class="social_icon" id="tumblr">T</a>
					<a href="http://pinterest.com/rywar/" class="social_icon" id="pinterest">p</a>
					<a href="http://open.spotify.com/user/1221987563" class="social_icon" id="spotify">s</a>
				</div>
				<div id="shadow"></div>
			
