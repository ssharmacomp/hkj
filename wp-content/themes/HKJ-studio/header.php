<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
<?php wp_head(); ?>
<?php if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
		<div class="wrap">
			<div class="heading">
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
					<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
						<span class="text-primary-color">
						MENU
						</span>
						<span class="icon-bars">
							<span class="icon-bar top"></span>
							<span class="icon-bar middle"></span>
							<span class="icon-bar bottom"></span>
						</span>
					</button>
				</div>
				<!-- .navigation-top -->
			<?php endif; ?>
			</div>
			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
		</div>
	</div>	
	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
</header>
<div class="video-background">
	<div class="overlay-content">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>	
	<?php $meta_value = get_post_meta( $post->ID, 'background-video', true ); 
		if  (!empty( $meta_value )) {echo '<video id="wp-custom-header-video" class="background-video" autoplay="true" loop="true" src="' . $meta_value . '"></video>';}
	else {} ?>
	
</div>
	<!-- #masthead -->
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page()) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
