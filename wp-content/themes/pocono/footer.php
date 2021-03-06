<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Pocono
 */

?>

	</div><!-- #content -->

	<?php do_action( 'pocono_before_footer' ); ?>

	<div id="footer" class="footer-wrap">

		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">

			<?php do_action( 'pocono_footer_menu' ); ?>

			<div id="footer-text" class="site-info">
				<?php
echo '<a href="http://www.estoriez.com"> All Rights Reserved @ Estoriez</a>';
?>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div>

	<?php get_sidebar( 'menu' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
