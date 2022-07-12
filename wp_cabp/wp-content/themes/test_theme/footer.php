<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper row5">
  			<div id="copyright" class="hoc clear">
    		<div class="enjoy">ENJOY MY HASHTAG ON TWITTER<p><a href="https://twitter.com/intent/tweet?button_hashtag=สิทธิเด็ก&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #สิทธิเด็ก</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    		</div>
  		</div>
		  <?php juicer_feed('name=watafaku') ?>
		<div class="site-info" style="text-align: right;margin: 20px 0;">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'test_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'test_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'test_theme' ), 'test_theme', '<a href="http://underscores.me/">Tester Guy</a>' );
				?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
