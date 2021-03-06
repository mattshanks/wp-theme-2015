<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<div id="footer" class="row">
	<?php wp_nav_menu( array( 'container_class' => 'footermenu', 'menu' => 'Footer Menu' ) ); ?>
	&copy; Matt Shanks 2018-2019. All rights reserved.
	
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/mattshanks/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
   		// initialize Masonry
		/*
		var $msnry = new Masonry(grid, {
			percentPosition: true,
			columnWidth: '.grid-sizer',
			itemSelector: '.item',
		} );
		// layout Masonry again after all images have loaded
		$msnry.imagesLoaded().progress(function() {
 	 	$msnry.layout();
		});
		*/
		
		var $grid = $('#grid').imagesLoaded( function() {
  		// init Masonry after all images have loaded
  		document.getElementById("grid").className += " masonry";
  		$grid.masonry({
    		percentPosition: true,
			columnWidth: '.grid-sizer',
			itemSelector: '.item'
 		 });
		});
		
		
   </script>
   
  
	
</body>
</html>