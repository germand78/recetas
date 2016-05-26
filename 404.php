<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tus_Recetas_Favoritas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<!-- START CONTAINER #2 -->
				    <div class="container-fluid error-container">
				      <div class="error center-block">
				        <img class="img-responsive center-block" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/04/22193840/error.png" >
				        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-main btn-red btn-block">continua navegando</a>
				      </div>
				  	</div><!-- END CONTAINER #2 -->

						<!-- <div class="page-content">
							<p><?php esc_html_e( 'Puede tratar haciendo otra búsqueda o navegar por los hipervínculos que le proporcionamos.', 'tusrecetasfavoritas' ); ?>
								<form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
			            <div class="input-group">
			              <input type="text" id="searchbox" class="form-control" placeholder="Buscar" name="s" id="s">
			              <div class="input-group-btn">
			                <button class="btn btn-default"  id="searchsubmit"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
			              </div>
			            </div>
			          </form>

							</p>





			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
