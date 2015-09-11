<?php
	$linkPrefix="/oddiguide/";
	if (strpos($_SERVER['REQUEST_URI'], 'wordpress')) {
		$linkPrefix="/wordpress/oddiguide/";
	}
	/*
	while (list($var,$value) = each ($_SERVER)) {
		echo "$var => $value <BR>";
	}
	die();
	*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		/*
		 * Globals
		 */

		 a {
		 	font-weight:bold;
		 }

		 .contentContainer {
		 	padding:10px;
		 }

		body {
		  font-family: Georgia, "Times New Roman", Times, serif;
		  color: #555;

		}

		h1, .h1,
		h2, .h2,
		h3, .h3,
		h4, .h4,
		h5, .h5,
		h6, .h6 {
		  margin-top: 0;
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  font-weight: normal;
		  /* color: #333; */
		}


		/*
		 * Override Bootstrap's default container.
		 */

		@media (min-width: 1200px) {
		  .container {
		    width: 970px;
		  }
		}


		/*
		 * Masthead for nav
		 */

		.blog-masthead {
		  background-color: #428bca;
		  -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
		          box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
		}

		/* Nav links */
		.blog-nav-item {
		  position: relative;
		  display: inline-block;
		  padding: 10px;
		  font-weight: 500;
		  color: #fff;

		}
		.blog-nav-item:hover,
		.blog-nav-item:focus {
		  color: #fff;
		  text-decoration: none;
		}

		/* Active state gets a caret at the bottom */
		.blog-nav .active {
		  color: #fff;
		}
		.blog-nav .active:after {
		  position: absolute;
		  bottom: 0;
		  left: 50%;
		  width: 0;
		  height: 0;
		  margin-left: -5px;
		  vertical-align: middle;
		  content: " ";
		  border-right: 5px solid transparent;
		  border-bottom: 5px solid;
		  border-left: 5px solid transparent;
		}

		/*
		 * Blog name and description
		 */

		.blog-header {
		  padding-top: 20px;
		  padding-bottom: 20px;
		}
		.blog-title {
		  margin-top: 30px;
		  margin-bottom: 0;
		  font-size: 60px;
		  font-weight: normal;
		}
		.blog-description {
		  font-size: 20px;
		  color: #999;
		}


		/*
		 * Main column and sidebar layout
		 */

		.blog-main {
		  font-size: 18px;
		  line-height: 1.5;
		}




		

		/* custom */
		h1 {
			margin-top: 4px;
		}
		h2 a {
			font-size: .8em;
		}
	</style>
  </head>
	<body>



	<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <!--<a class="blog-nav-item active" href="<?php echo $linkPrefix . 'index'; ?>">Get Started</a>-->
          <a class="blog-nav-item" href="<?php echo $linkPrefix . 'index'; ?>">FAQ</a>
          <a class="blog-nav-item" href="<?php echo $linkPrefix . 'about'; ?>">Pressbooks Resources</a>
        </nav>
      </div>
    </div>

    <div class="contentContainer">
	
	