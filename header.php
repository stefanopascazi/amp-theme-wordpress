<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amp_Theme
 */

?>
<!doctype html>
<html amp <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="burger-menu" class="menu">
		<button on="tap:sidebar.toggle">
			<span class="menu-bar"></span>
			<span class="menu-bar"></span>
			<span class="menu-bar"></span>
		</button>
	</div>
	<div id="page">
		<header class="head">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php bloginfo( 'description' ); ?></h3>
		</header>