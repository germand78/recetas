<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tus_Recetas_Favoritas
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<header class="col-md-12">
				<div class="col-md-2"></div>
				<h1 class="section-title col-md-8"><?php printf( esc_html__( 'Resultados de búsqueda para: %s', 'tusrecetasfavoritas' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<div class="col-md-2"></div>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			//	while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			//		endwhile;
?>

			<?php
			the_posts_navigation(); ?>

<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

		<div class="nav-links">
			<div class="row">
				<div class="col-xs-12 text-center">
					<ul class="pagination">
						<li>
						<?php
						the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Anterior', 'textdomain' ),
					'next_text' => __( 'Siguiente', 'textdomain' ),
					) );
						?>
					</li>
				</ul>
			</div>
		</div>
	</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
