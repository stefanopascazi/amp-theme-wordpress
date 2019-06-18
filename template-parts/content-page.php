<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amp_Theme
 */

?>

<article amp-fx="fade-in fly-in-top" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) : ?>
		<?php amp_theme_post_thumbnail(); ?>
	<?php endif; ?>
	<header class="single-post">
		<h1 class="color-1"><?php the_title(); ?></h1>
		<h6 class="entry"><?php amp_theme_posted_on(); ?> | <?php amp_theme_posted_by(); ?></h6>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer>
		<h6><?php amp_theme_entry_footer(); ?></h6>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
