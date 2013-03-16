<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no" />
<title>
<?php 
	bloginfo('name'); 
	if ( is_single() ) { 
		echo " &raquo; Blog Archive";
	} 
	if (trim(wp_title('',false)) == 'Page not found'){
		echo " &raquo; Photos"; 
	} else {
		wp_title();
	}
?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>


</head>

<body>
<div id="page">
<div id="header">
	<div id="headertitle">
		<h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
	</div> 		
</div>
<div id="wrapper">
