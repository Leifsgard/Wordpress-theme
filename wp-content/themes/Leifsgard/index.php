<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
<div id="perspective" class="perspective effect-airbnb">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					<div class="codrops-top clearfix">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/ProgressButtonStyles/"><span>Previous Demo</span></a>
						<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=17915"><span>Back to the Codrops Article</span></a></span>
					</div>
					<header class="codrops-header">
						<h1>Perspective Page View Navigation <span>Transforms the page in 3D to reveal a menu</span></h1>	
					</header>
					<div class="main clearfix">
						<div class="column">
							<p><button id="showMenu">Show Menu</button></p>
							<p>Click on this button to see the content being pushed away in 3D to reveal a navigation or other items.</p>
						</div>
						<div class="column">
							<nav class="codrops-demos">
								<a href="index.html" class="current-demo">Airbnb Effect</a>
								<a href="index2.html">Move Left</a>
								<a href="index3.html">Rotate Left</a>
								<a href="index4.html">Move Down</a>
								<a href="index5.html">Rotate Top</a>
								<a href="index6.html">Lay Down</a>
							</nav>
						</div>
						<div class="related">
							<p>If you enjoyed this demo you might also like:</p>
							<p><a href="http://tympanus.net/Tutorials/AnimatedBorderMenus/">Animated Border Menus</a></p>
							<p><a href="http://tympanus.net/Development/SidebarTransitions/">Transitions for Off-Canvas Navigations</a></p>
						</div>
					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
				<a href="#" class="icon-home">Home</a>
				<a href="#" class="icon-news">News</a>
				<a href="#" class="icon-image">Images</a>
				<a href="#" class="icon-upload">Uploads</a>
				<a href="#" class="icon-star">Favorites</a>
				<a href="#" class="icon-mail">Messages</a>
				<a href="#" class="icon-lock">Security</a>
			</nav>
		</div><!-- /perspective -->
<?php get_footer();
