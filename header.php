<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php
			global $query_string;

			if ( is_home() )
				bloginfo( 'name' );

			if ( get_search_query() )
				echo 'Results for: "' . get_search_query() .'"';

			if ( is_month() )
				the_time('F Y');

			if ( is_category() )
				single_cat_title();

			if ( is_single() )
				the_title();

			if ( is_page() )
				the_title();

			if ( is_tag() )
				single_tag_title();

			if ( is_404() )
				echo 'Page Not Found!';
		?>
	</title>
	<meta name="generator" content="WordPress and MobilePress" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="height=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet" type="text/css" media="screen, handheld, print, projection" />
	<link href="<?php bloginfo( 'template_url' ); ?>/css/nav.css" rel="stylesheet" type="text/css" media="screen, handheld, print, projection" />
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bigContact.css" rel="stylesheet" type="text/css" media="screen, handheld, print, projection" />
        <link href="<?php bloginfo( 'template_url' ); ?>/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" media="screen, handheld, print, projection" />
    <link rel="icon" type="image/gif" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">window.addEventListener('load',function(){setTimeout(function(){window.scrollTo(0, 0);},0);});</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>



	<script type="text/javascript">
    jQuery(document).ready(function($){

    	/* prepend menu icon */
    	$('#nav-wrap').prepend('<div id="menu-icon"></div>');

    	/* toggle nav */
    	$("#menu-icon").on("click", function(){
    		$("#nav").slideToggle();
    		$(this).toggleClass("active");
    	});

    });
    </script>
</head>
<body>

<div id="headerwrap">
	<div id="header">

		<nav id="nav-wrap">

        	<ul id="nav">
        		<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>">Home</a></li>
        		<li><a href="about-mobile">About</a></li>
        		<li><a href="blog">Blog</a></li>
        		<li><a href="contact-mobile">Contact</a></li>
        	</ul>

        </nav>
		<img src="<?php bloginfo( 'template_url' ); ?>/img/pg-logo-mobile.png" />

		<!--<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p><?php bloginfo('description'); ?></p> -->
	</div>

</div>