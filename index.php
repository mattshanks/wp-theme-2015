<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="container">
	
	<div class="row banner">
			<div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-6">
				<a class="img-link" href="http://www.readings.com.au/products/21759996/row-row-row-your-boat-aussie-nursery-rhymes"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/RRYB-Banner.png" alt="Row, Row, Row Your Boat, Matt Shanks, Scholastic Australia" /></a>
			</div>
			<div class="content col-lg-4 col-md-5 col-sm-6">
				<h2>Row Row Row Your Boat</h2>
				<p>Come aboard with the Aussie animals on an adventure down the stream, as they all try to squeeze into a tiny boat. But look out, someone else is following too!</p>
				<h3>Available 1 July, <span class="price">$14.99</span><span class="currency">RRP</span></h3>
				<a class="button tk-brandon-grotesque" href="http://www.readings.com.au/products/21759996/row-row-row-your-boat-aussie-nursery-rhymes">Pre-order now</a>
			</div>	
			
	</div>
	
	
	<div id="spinner" style="text-align:center;" class="sm-caps"></div>
	<!--<span class="tk-brandon-grotesque">Here's some test text</a>-->
	
	<div class="grid-sizer"></div>
		<?php
			/*query_posts ('orderby=rand');*/
			query_posts ('category_name=PRINTS');
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$permalink = get_permalink( $id, $leavename );
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					list($width, $height) = getimagesize($feat_image);
					?>
					<?php
					if ($width > $height) {
  					  ?>
  					  <div class="item w2">
  					  <a href="<?php echo $permalink; ?>"><img src="<?php echo $feat_image; ?> "></a>
  					  <!--<div class="title"><?php echo the_title()?></div>-->
  					  </div>
  					  <?php
						} else {
  					  ?>
  					  <div class="item"><a href="<?php echo $permalink; ?>"><img src="<?php echo $feat_image; ?> "></a>
  					  <!--<div class="title"><?php echo the_title()?></div>-->
  					  </div>
  					  <?php
					}
					?>
					<?php
				}
			}
		?>	
	</div><!-- #container -->
	<br clear="both" />
	<ul class="row continue">
		<li><a href="http://www.instagram.com/matt_shanks" target="_blank"><i class="fa fa-instagram"></i>More on Instagram</a></li>
		<li><a href="<?php echo home_url();?>/contact" target=""><i class="fa fa-pencil-square-o"></i>Subscribe for updates</a></li>
	</div>
		
	


<?php get_footer(); ?>