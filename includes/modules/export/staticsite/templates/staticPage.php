<?php

	if ( ! defined( 'ABSPATH' ) )
		exit;
	$languageCode = 'en';
	if (! empty( $metadata['pb_language'] ) ) {
		$languageCode = $metadata['pb_language'];
	}
	$toolName = get_site_option('site_name'); 
	$bookName=esc_attr( get_bloginfo( 'name', 'display' ));
	$author=@$metadata['pb_author'];

?>

<!DOCTYPE html>
<html xml:lang="<?php echo $languageCode; ?>" >
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="static.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $bookName; ?></title>
	
	<?php 
		//this line is replaced during the export process.  don't delete it.
		echo "<!--// INSERT STYLE-->"; 
	?>
	<style>
		BODY {
			padding:0px !important;
		}
	</style>

</head>
<body id="#staticPage"  >

<div class="nav-container">
	<nav>
	    <h1 class="book-title"><a href="./" title="<?php echo $bookName; ?>" rel="home"><?php echo $bookName; ?></a></h1>
		<!--
		for linking back to the tool
		<div class="sub-nav-left">
			<h2 class="pressbooks-logo"><a href="./"><?php echo $toolName; ?></a></h2>
		</div>
		-->
	</nav>
	<div class="sub-nav">
		<div class="author-wrap"> 
			<h3><?php echo $author; ?></h3>
		</div> 
	</div>
</div> <!-- end .nav-container -->

<div class="wrapper"><!-- for sitting footer at the bottom of the page -->	    
	<div id="wrap">	    
		<div id="content">
			<?php 
				echo " <!--// INSERT PREVIOUS LINK --> \r\n &nbsp;&nbsp;&nbsp;&nbsp;" ;
				echo " <!--// INSERT NEXT LINK --> \r\n"; 
				echo $post_content;
			?>
		</div>
		<div id="sidebar">
			<ul id="booknav">
				<li class="home-btn"><a href="index.html">Home</a></li>
				<li class="toc-btn"><a href="table-of-contents.html">Table of Contents</a></li>
			</ul>
		</div><!-- end #sidebar -->
	</div>
	<div class="push"></div>
</div><!-- .wrapper for sitting footer at the bottom of the page -->

<link rel='stylesheet' id='mediaelement-css'  href='mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='wp-mediaelement.css?ver=4.2.4' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/wordpress\/book3\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='mediaelement-and-player.min.js?ver=2.16.2'></script>
<script type='text/javascript' src='wp-mediaelement.js?ver=4.2.4'></script>

</body>
</html>
