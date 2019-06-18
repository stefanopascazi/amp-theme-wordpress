<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amp_Theme
 */

?>

<article amp-fx="fade-in fly-in-top" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) : ?>
		<?php if( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php endif; ?>
		<?php amp_theme_post_thumbnail(); ?>
		<?php if( ! is_single() ) : ?>
				</a>
		<?php endif; ?>
	<?php endif; ?>
	<header class="single-post">		
		<?php if( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<h2 class="color-3"><?php the_title(); ?></h2>
			</a>
		<?php else : ?>		
			<h1 class="color-1"><?php the_title(); ?></h1>
			<h6 class="entry"><?php amp_theme_posted_on(); ?> | <?php amp_theme_posted_by(); ?></h6>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php if( is_single() ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<div>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				Leggi articolo
			</a>
		</div>
		<?php endif; ?>
	</div>
	<footer>
		<h6><?php amp_theme_entry_footer(); ?></h6>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
