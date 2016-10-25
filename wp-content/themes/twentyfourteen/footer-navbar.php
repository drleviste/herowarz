<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo" style="width:100%; position: fixed; bottom: 0px;">
			<div style="padding: 5px; height: 5vh;">
			<!-- <div style="padding: 5px;"> -->
				<?php previous_post_link('%link', '<img src="/wp-content/uploads/2016/10/btn-left.png" style="float: left; height: 5vh; padding-bottom: 5px;"/>', TRUE); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2016/10/btn-home.png" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); height: 5vh;" /></a>
				<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2016/10/btn-home.png" style="display: block; margin: 0 auto; height: 30px;" /></a> -->
				<?php next_post_link('%link', '<img src="/wp-content/uploads/2016/10/btn-right.png" style="float: right; height: 5vh; padding-bottom: 5px;"/>', TRUE); ?>
			<!-- </div> -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
