<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Test_Theme
 */

get_header();
?>
<header id="masthead" class="site-header hoc clear">
<div class="toppicture">
  <div class="top">
  <div class="galleryContainer" style="left: 0;">
    <div class="slideShowContainer">
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="http://161.246.38.35/~it61070070/wp_cabp/wp-content/uploads/2019/05/79167726-2.jpg">
            <p class="captionText"></p>
        </div>
        <div class="imageHolder">
            <img src="http://161.246.38.35/~it61070070/wp_cabp/wp-content/uploads/2019/05/fckkkk2.jpg">
            <p class="captionText"></p>
        </div>
        <div class="imageHolder">
            <img src="http://161.246.38.35/~it61070070/wp_cabp/wp-content/uploads/2019/05/fckkkk.jpg">
            <p class="captionText"></p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>

<script src="mainjava.js"></script>
     <!--  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> -->
      <h3 class="site-title texttop nav-center" style="z-index: 4;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
  </div>
</div>
</header><!-- #masthead -->
	<div id="content" class="site-content" style="margin-top: 85px;">


	<div id="primary" class="content-area wrapper row3">
		<main id="main" class="site-main hoc container clear">
			<ul class="nospace group services">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/?>
					<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
						<li class="one_third first">
							<?php get_template_part( 'template-parts/content-home', get_post_type() );?>
						</li>
					<?php else : ?>
						<li class="one_third">
							<?php get_template_part( 'template-parts/content-home', get_post_type() );?>
						</li>
					<?php endif; ?>
				<?php
				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content-home', 'none' );

			endif;
			?>
		</ul>
		</main><!-- #main -->
		<div class="wrapper row2">
		<section class="hoc container clear">
			<div class="sectiontitle">
			<div class="lol">
			<h6 class="game">GAME</h6>
			<a href="http://www.it.kmitl.ac.th/~it61070070/capgame/"><div class="playgame">Let's play</div></a>
			</div>
			</div>
		</div>
		</section>
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
