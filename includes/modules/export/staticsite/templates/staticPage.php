<?php

	if ( ! defined( 'ABSPATH' ) )
		exit;
	$languageCode = 'en';
	if (! empty( $metadata['pb_language'] ) ) {
		$languageCode = $metadata['pb_language'];
	}
	
?>




<!DOCTYPE html>
<html xml:lang="<?php echo $languageCode; ?>" >
<head>
	<?php if ( ! empty( $stylesheet ) ): ?>
		<link rel='stylesheet' id='pressbooks-css'  href='http://localhost/wordpress/flowers/wp-content/plugins/pressbooks/themes-book/pressbooks-book/style.css' type='text/css' media='screen,print' />
		<!--
		<link rel="stylesheet" href="<?php //echo $stylesheet; ?>" type="text/css" /> -->

	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bookName</title>
	<?php wp_head(); ?>

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
	    <h1 class="book-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="sub-nav-left">
			<h2 class="pressbooks-logo"><a href="<?php echo PATH_CURRENT_SITE; ?>"><?php echo get_site_option('site_name'); ?></a></h2>
		</div>
		<div class="sub-nav-right">
			<?php get_template_part( 'content', 'social-header' ); ?>
		</div>
	</nav>
	<div class="sub-nav">
		<div class="author-wrap"> 
			<h3><?php echo @$metadata['pb_author']; ?></h3>
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
	<?php get_sidebar(); ?>
	</div>
	<div class="push"></div>
</div><!-- .wrapper for sitting footer at the bottom of the page -->
<?php wp_footer(); ?>
</body>
</html>
