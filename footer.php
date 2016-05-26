<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tus_Recetas_Favoritas
 */

?>

</div><!-- #content -->
</div><!-- hidden -->

	<footer>
		<nav class="navbar navbar-application">
			<div class="container">
				<div class="disclaimer-wrapper">
					<a href="<?php  esc_url( get_permalink() ); ?>" class="navbar-brand">
						<img alt="Tus Recetas Favoritas logo" src="http://s3-sa-east-1.amazonaws.com/tus-recetas-favoritas/wp-content/uploads/2016/04/08154842/footer-logo.png"  class="img-responsive">
					</a>
					<p class="disclaimer">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Tusrecetasfavoritas.com</a>
						es un sitio web informativo que provee información sobre las recetas de comidas populares del mundo. Además, proveemos información interesante de consejos sobre la preparación de comidas y tips útiles sobre el uso de algúnos alimentos.

						<br>
						<br>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Tusrecetasfavoritas.com</a>
						 es de propiedad privada y no se encuentra asociado a ninguna agencia gubernamental. .
						<br>
						<br>Si desea comunicarse con nosotros <a href="<?php echo esc_url( home_url( '/' ) ); ?>contactenos/">Contáctenos</a>

						<hr />


					</p>
				</div>
			</div>
			<div class="footer-links-wrapper">
				<div class="container">
					<ul class="nav navbar-nav text-center">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>politicas-de-privacidad">Políticas De Privacidad</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>terminos-y-condiciones">Términos Y Condiciones</a></li>
						<li class="copyright">Copyright &copy; 2016 Tusrecetasfavoritas.com</li>
					</ul>
				</div>
			</div>
		</nav>
	</footer>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			$("#ver-articulo").click(function(){
				$(".text-wrapper .text").removeClass("blured");
				$(".text-wrapper .floating-banner.popup").remove();
			});
		});
	</script>

<?php wp_footer(); ?>
<script>
// SAME HEIGHT FROM TABLES
 function sameHeight() {
   var maxHeight = 0;
   var sameHeightElements = $('.thumbnail');
   sameHeightElements.each(function(){
     $el = $(this);
     $el.css('min-height', 0);
     maxHeight = Math.max(maxHeight, $el.outerHeight());
   });
   sameHeightElements.css('min-height', maxHeight + 'px');
 };

// Import Fonts
   WebFontConfig = {
     google: { families: [ 'Fjalla+One::latin' ] }
   };
   (function() {
     var wf = document.createElement('script');
     wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
     wf.type = 'text/javascript';
     wf.async = 'true';
     var s = document.getElementsByTagName('script')[0];
     s.parentNode.insertBefore(wf, s);
   })();
// End Import Font

 /*	This function sets the cookie	*/
 function iLoveCookies(){
		days=30; // number of days to keep the cookie
		myDate = new Date();
		myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
		//document.cookie="suscriptor=1; expires=Thu, 18 Dec 2017 12:00:00 UTC; path=/";
		document.cookie="suscriptor=1; path=/; expires=" + myDate.toGMTString();

 }
 /*	end of cookie function	*/

 $(document).on('ready', function(){
     $(window).resize(sameHeight);
   sameHeight();
 });
</script>

</body>
</html>
