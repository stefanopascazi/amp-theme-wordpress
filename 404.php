<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Amp_Theme
 */

get_header();
?>


<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title color-1"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'amp-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'amp-theme' ); ?></p>

		<?php
		get_search_form();
		?>

		<div class="widget widget_categories">
			<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'amp-theme' ); ?></h2>
			<ul>
				<?php
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				) );
				?>
			</ul>
		</div><!-- .widget -->


	</div><!-- .page-content -->
</section><!-- .error-404 -->
<?php
get_footer();
