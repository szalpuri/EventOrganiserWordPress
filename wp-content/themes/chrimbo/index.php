<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chrimbo
 */

get_header(); ?>

<div class="wrapper page-inner-title">
	<div class="thumb-overlay">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12 col-sm-12 col-xs-12">
					<?php if ( is_home() && ! is_front_page() ) { ?>
						<header class="entry-header">
							<h1 class="page-title"><?php single_post_title(); ?></h1>
						</header>
					<?php 
					}
					else{ ?>
						<header class="entry-header default-title">
							<h1 class="entry-title"><?php printf( esc_html__( 'Latest Posts', 'chrimbo' ), 'Chrimbo')?></h1>
						</header>
					<?php } 
					?>
		        </div>
		    </div>
		</div>
	</div>
</div>
<section class="wrapper">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				/**
				 * chrimbo_action_posts_navigation hook
				 *
				 * @hooked: chrimbo_posts_navigation - 10
				 *
				 * @since  Chrimbo 1.0.0
				 */
				do_action( 'chrimbo_action_posts_navigation' );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- #content -->
</section>
<?php get_footer(); ?>