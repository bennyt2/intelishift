<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    <div id="footer">
      <div class="footer_menu">
       <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
       
        <p> Copyright © 2011-2013 Intelishift Technologies </p>
      </div>
    </div>
	<!--<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php// do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php// echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php// esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php// printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	<!--</footer>--><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>