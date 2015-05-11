<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Inkness
 */
?>
	

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="container">
			<div class="site-info col-md-2">
				<h4><a href="#">Sociales</a></h4>
				<ul  class="list-unstyled">
					<li>
						<a href="#">Día</a>
					</li>
					<li>
						<a href="#">Noche</a>
					</li>
				</ul>
			</div><!-- .site-info -->
			<div id="footertext" class="col-md-2">
		    	<h4><a href="#">Aperturas</a></h4>
				<ul  class="list-unstyled">
					<li>
						<a href="#">Servicios</a>
					</li>
					<li>
						<a href="#">Productos</a>
					</li>
				</ul>
		    </div>
		    <div id="footertext" class="col-md-2">
		    	<h4><a href="#">Viajar</a></h4>
				<ul  class="list-unstyled">
					<li>
						<a href="#">Comer</a>
					</li>
					<li>
						<a href="#">Visitar</a>
					</li>
					<li>
						<a href="#">Aventura</a>
					</li>
				</ul>
		    </div>
		    <div id="footertext" class="col-md-2">
		    	<h4><a href="#">Mas</a></h4>
				<ul  class="list-unstyled">
					<li>
						<a href="#">Biogrfias</a>
					</li>
					<li>
						<a href="#">Salud</a>
					</li>
				</ul>
		    </div>
		    <div class="col-md-4">
		    	Sitio diseñado por
				<a href="http://inkhive.com/product/inkness" rel="designer">Jocelyn y Diego Inc</a>
		    </div>
		</div>   
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>
</body>
</html>