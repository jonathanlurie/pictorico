<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pictorico
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="http://jonathanlurie.fr/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=677497715661206&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-inner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">jonathan</a><a style="color: #FFc000 "href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">lurie</a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><span class="screen-reader-text"><?php _e( 'Menu', 'pictorico' ); ?></span></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pictorico' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			<div class="header-search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php if ( is_home() && pictorico_has_featured_posts( 1 ) ) : ?>
		<?php get_template_part( 'content', 'featured' ); ?>
	<?php elseif ( get_header_image() && ( is_home() || is_archive() || is_search() ) ) : ?>
		<div class="hentry has-thumbnail">
			<div class="entry-header">
				<div class="header-image" style="background-image: url(<?php header_image(); ?>)">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></a>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div id="content" class="site-content">