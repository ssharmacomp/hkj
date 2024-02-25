<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>


		<button class="menu-toggle" aria-controls="top-menu" aria-expanded="true">
						<span class="text-primary-color">
						MENU
						</span>
						<span class="icon-bars">
							<i class="fa fa-times" aria-hidden="true"></i>
						</span>
					</button>
</nav><!-- #site-navigation -->
