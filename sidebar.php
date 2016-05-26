<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tus_Recetas_Favoritas
 */

?>
<!-- Display en Home -->
<?php if ( !is_home() &&  is_front_page()  ) : ?>

	<aside id="secondary" class="widget-area " role="complementary">
		<!-- START CONTAINER #2 -->
		<div class="container main-container">
		  <!-- RECIPES START -->
		  <div class="row">
		    <div class="col-sm-12 col-md-8">
		      <div class="container-fluid">
		        <div class="row">
		          <h2 class="section-title">Ultimas Recetas</h2>

								<?php
								// Display news hiperlinks
								$args = array( 'posts_per_page' => 6 ,'category_name' => 'platos-principales, abc-cocina, guarniciones, recetas-postres, panes, recetas-express, recetas-bebidas, comidas-del-mundo');
								$myposts = get_posts( $args );
								foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

								<div class="col-xs-6 col-md-6">
									<div class="thumbnail">
								<a href=<?php the_permalink();?>>
									<?php if (has_post_thumbnail()) {
									the_post_thumbnail('img-responsive');}?>
								</a>
								<div class="caption">
									<a href=<?php the_permalink();?>><p class="post-category"><?php the_category(', '); ?></p></a>
									<a href=<?php the_permalink();?>><h3 class="post-title"><?php the_title(); ?></h3></a>
								</div>
								</div>
							</div>
						<?php endforeach; ?>
		          </div>
		        </div>
						<?php
						// Get the ID of a given category
						// $category_id = get_cat_ID( 'consejos-de-lola' );
						// Get the URL of this category
						$category_link = get_category_link( 2528 );
						?>
		        <div class="row">
		          <a href=<?php echo esc_url( $category_link ); ?> class="btn btn-main btn-block">ver mas recetas <span></span></a>
		        </div>
		      </div>

				<!-- BANNERS -->
		    <div class="col-md-4 hidden-sm hidden-xs banner-rail">
		      <div><?php dynamic_sidebar ('banner-1'); ?></div>
				</br>
		      <!-- <div><?php// dynamic_sidebar ('banner-2'); ?></div> -->
		    </div>
		  </div>
			<!-- BANNNERS END -->
		  <!-- RECIPES END -->
		</div><!-- END CONTAINER #2 -->

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


</aside>

	<!-- END CONTAINER #2 -->

<?php endif; ?><!-- End Display en Home -->

<div class="container-fluid related-articles">

	<!-- ARTICLES START -->
	<div class="container">
		<div class="row related-posts">
			<h2 class="section-title">Ultimos Articulos</h2>
					<?php
					// Display news hiperlinks
					$args = array( 'posts_per_page' => 4, 'category_name' => 'rincon-de-maggie');
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class="col-xs-6 col-md-3">
						<div class="thumbnail">
					<a href=<?php the_permalink();?> >
						<?php if (has_post_thumbnail()) {
						the_post_thumbnail('img-responsive');}?>
					</a>

					<div class="caption">
						<a href=<?php the_permalink();?>><p class="post-category"><?php the_category(', '); ?></p></a>
						<a href=<?php the_permalink();?>><h3 class="post-title"><?php the_title(); ?></h3></a>
					</div>
			</div>
		</div>
		<?php
    // Get the ID of a given category
    // $category_id = get_cat_ID( 'consejos-de-lola' );
    // Get the URL of this category
    $category_link = get_category_link( 2574 );
		?>
			<?php endforeach; ?>
		</div>

		<div class="row">
			<a class="btn btn-main btn-block" href="<?php echo esc_url( $category_link ); ?>">ver mas recetas <span></span></a>
		</div>
	</div>
	<!-- ARTICLE END -->
</div>

<!-- Formulario  -->
<div class="container-fluid data-capture-1">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<img class="img-responsive center-block" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/05/02185453/datacapture_header.png" >
				<form  method="get"  action="http://www.gana-premios.co/" >
					<div class="form-group">
						<input type="email" class="form-control" id="InputEmail" placeholder="Email" title="Se requiere una Email válido"  required>
					</div>
					<button type="submit"  value="submit" class="btn btn-main btn-red btn-block">Enviar</button>
				</form>
		</div>
	</div>
</div>

<!-- #secondary -->
