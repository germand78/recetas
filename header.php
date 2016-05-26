<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tus_Recetas_Favoritas
 */

// header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
<!-- Start Visual Website Optimizer Asynchronous Code -->
<!-- <script type='text/javascript'>
var _vwo_code=(function(){
var account_id=180215,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script> -->
<!-- End Visual Website Optimizer Asynchronous Code  -->
</head>

<body <?php body_class(); ?> >

  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTXS9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PTXS9M');</script>
  <!-- End Google Tag Manager -->

<div id="page" class="site <?php if ($_COOKIE['suscriptor'] != 1 ) {
?>
<?php //if (( !is_home()) &&  (!is_front_page() ) && (!is_archive())) : ?>  vhidden <?php //endif; ?>
<?php } ?>"  >
<div id="hidden">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->


    <!-- #site-navigation -->
    <div class="container-fluid main-header">

      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span><span><i class="fa fa-bars fa-2x"></i></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="tus recetas favoritas" class="img-responsive" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/04/08154852/tusrecetasfavoritas_logo.png" ></a>
          </div>

        <!--end navbar-header-->
        <div class="collapse navbar-collapse main-nav navbar-right" id="bs-example-navbar-collapse-1">
        <!-- <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1"> -->
          <?php
            wp_nav_menu( array(
           'menu'              => 'primary',
           'theme_location'    => 'primary',
           'depth'             => 2,
           'container'         => 'ul',
           'container_class'   => 'collapse navbar-collapse',
           'container_id'      => 'bs-example-navbar-collapse-1',
           'menu_class'        => 'nav navbar-nav',
           'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
           'walker'            => new wp_bootstrap_navwalker())
            );
         ?>
         <div id="wrap" class="search-full">
           <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform" autocomplete="on">
             <input id="search"  type="text" placeholder="Buscar" name="s" id="s">
               <button id="search_submit" type="submit" class="btn btn-default">
                 <i class="fa fa-search fa-2x"></i>
               </button>
             </form>
           </div>
       </div><!--end navbar-colapse-->
          <div id="wrap" class="search-collapse">
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform" autocomplete="on">
              <input id="search"  type="text" placeholder="Buscar" name="s" id="s">
                <button id="search_submit" type="submit" class="btn btn-default">
                  <i class="fa fa-search fa-2x"></i>
                </button>
              </form>
            </div>

      </div><!--end container-->
    </nav>


<?php  if ((in_category( 'guarniciones' )) || (in_category( 'platos-principales' )) || (in_category( 'abc-cocina' )) || (in_category( 'recetas-postres' )) ||
(in_category( 'panes' )) || (in_category( 'recetas-bebidas' )) || (in_category( 'comidas-del-mundo' )) || (in_category( 'recetas-express' )) || (in_category( 'consejos-de-lola' )))   :
 ?>
  <!-- <div class="row top-banner">
    <a href="http://www.gana-premios.co/" target="_blank">
    <img class="img-responsive center-block" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/05/12164703/header-main-img-2-1.png" >
  </a>
    <span></span>
  </div> -->
<?php elseif ((is_page_template ('template-parts/content-thank-you.php'))): ?>

<?php else: ?>
	      <!-- <div class="row top-banner">
          <a href="http://www.gana-premios.co/" target="_blank">
            <img class="img-responsive center-block" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/05/12164703/header-main-img-2-1.png" > -->
            <!-- <img class="img-responsive center-block" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/05/02202300/header-main-img11.png" > -->
        <!-- </a>
	        <span></span>
	      </div> -->
<?php endif; ?>

	    </div>
	    <!-- END CONTAINER #1 -->
	</header><!-- #masthead -->
<!-- COOKIES -->
	<div id="content" class="site-content">
<?php
if ( is_front_page() && is_home() ) :
  get_sidebar();
endif;
?>
