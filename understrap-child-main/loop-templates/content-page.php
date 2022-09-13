<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">



		<?php if (is_front_page() || is_home()) {
			echo "<header class='entry-header' style='display: none;'>";
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo "</header>";
		} else {
			echo "<header class='entry-header'>";
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo "</header>";
		}
		?>

	<!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
