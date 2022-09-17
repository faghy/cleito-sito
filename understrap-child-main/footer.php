<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info" style="text-align: center">
                        <a style="color: #5382b1;" target="_blank" href="https://dueclic.com">
                            <img style="text-align: center;" src="/wp-content/themes/understrap-child-main/img/dueclic-azzurro.png" width="140">
                        </a>

						<h2 id="h2-footer" style="text-align: center; color: #828283;">@Cleito è un software sviluppato da
                            <a style="color: #5382b1;" target="_blank" href="https://dueclic.com">dueclic</a>
                        </h2>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

