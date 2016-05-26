<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tus_Recetas_Favoritas
 */
 get_header(); ?>
<?php if ((!is_home()) && (!is_front_page()) && (!is_single()))  :?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
  	</header><!-- .entry-header -->

  	<aside id="secondary" class="widget-area" role="complementary">
  		<!-- START CONTAINER #2 -->
  		<div class="container main-container">
        <!-- RECIPES START -->
        <div class="row">
  		    <div class="col-sm-12 col-md-8">
  		      <div class="container-fluid">
  		        <div class="row">
  		          <h2 class="section-title"><?php
                // Display name from Father Category
                $categoria = get_the_category();
                //print $categoria[0]->cat_name;
                ?>
                <?php single_cat_title(''); ?>
              </h2>

                <?php
            		$cont = 0;
            		$sw = 0;

            		//query_posts("paged=$paged");
            		if ( have_posts() ) :
            			/* Start the Loop */
            			$sw=1;
            			while ( have_posts() ) : the_post();
            				$cont++;
            			?>
  		  <!-- RECIPES START -->
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
              <?php endwhile; ?>
          </div>
        </div>

      <div class="row">
  <!-- <a href=<?php  the_permalink();  ?> class="btn btn-main btn-block">ver mas recetas<span></span></a> -->
      </div>

    </div>
  <!-- BANNERS -->
  <div class="col-md-4 hidden-sm hidden-xs banner-rail">
    <div><?php dynamic_sidebar ('banner-1'); ?></div>
    <!-- </br>
    <div><?php// dynamic_sidebar ('banner-2'); ?></div> -->
  </div>

</div>
</div>
</aside>
        <?php
    		else :
    			get_template_part( 'template-parts/content', 'none' );

    		endif; ?>
<!-- PAGINATION -->
    <?php   if ($cont >= 5 ) : ?>
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
    </div><!-- .nav-links -->
  <?php endif; ?>
</article>


<?php endif; ?>
<footer class="entry-footer">
  <?php //tusrecetasfavoritas_entry_footer(); ?>
</footer><!-- .entry-footer -->
<?php
get_sidebar();
get_footer();

?>
