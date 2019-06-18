<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amp_Theme
 

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<amp-sidebar id="sidebar"
    class="sample-sidebar"
    layout="nodisplay"
    side="left">
    <h3>MENU</h3>
	<?php wp_nav_menu( 'primary' ); ?>
</amp-sidebar>

