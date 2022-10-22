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

		<?php
            echo "<header class='entry-header' style='display: none;'>";
            the_title( '<h1 class="entry-title">', '</h1>' );
            echo "</header>";
		?>

	<!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

        <div class="wp-block-image is-style-default">
            <figure class="aligncenter size-full is-resized">
                <a href="/">
                    <img src="/wp-content/themes/understrap-child-main/img/cleito-logo-sfumato-346x84.png" alt="Logo-cleito" class=""  sizes="(max-width: 346px) 100vw, 346px" width="450">
                </a>
            </figure>
        </div>

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
