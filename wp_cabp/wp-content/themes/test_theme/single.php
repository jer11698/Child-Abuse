<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Test_Theme
 */

get_header();
?>

<header id="masthead" class="site-header hoc clear" style="background-image: url('');">
<div class="toppicture-post">
  <div class="top">
     <!--  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> -->
      <h3 class="texttop-post"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
  </div>
</div>
</header>

	<div id="primary" class="content-area wrapper row3">

		<?php
		while ( have_posts() ) :?>
		<main id="main" class="site-main hoc container clear">
			<?php
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();
			?>
			</main><!-- #main -->
			<div class="wrapper row2">
			<main id="main" class="site-main hoc container clear">
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();?>
				</main><!-- #main -->
			<?php endif;?>
			</div>
<?php
		endwhile; // End of the loop.
		?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
