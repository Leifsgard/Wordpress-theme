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

<div id="perspective" class="perspective effect-moveleft">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					
					<header class="codrops-header">
						<h1>Rasmus Leifsgård <span>UI & UX Designer </span></h1>
					</header>
					<div class="main clearfix">
						<div class="column">
							<p><button id="showMenu">Navigate the menu</button></p>
							<p>Click on this button to see the menu</p>
						</div>
						<div class="column">
							<nav class="codrops-demos">
								<!---<a href="index6.html" >Lay Down</a>-->
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
			<nav class="outer-nav right vertical">
			<p>Rasmus Leifsgard <span><br>UI & UX Designer </span></p>
			<?php
			wp_nav_menu( array( 'theme_location' => 'top', 'container_class' => 'menu' ) );
			?>
				<a href="#" class="icon-home">Home</a>
				<a href="#" class="icon-news">News</a>
				<a href="#" class="icon-image">Images</a>
				<a href="#" class="icon-upload">Uploads</a>
				<a href="#" class="icon-star">Favorites</a>
				<a href="#" class="icon-mail">Messages</a>
				<a href="#" class="icon-lock">Security</a>
				
				<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
<?php get_footer();
