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
	<div id="spinner" style="text-align:center;" class="sm-caps"></div>
	<div class="grid-sizer"></div>
		<?php
			/*query_posts ('orderby=rand');*/
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
  					  <a href="<?php echo $permalink; ?>"><img class="img-responsive" src="<?php echo $feat_image; ?> "></a>
  					  <!--<div class="title"><?php echo the_title()?></div>-->
  					  </div>
  					  <?php
						} else {
  					  ?>
  					  <div class="item"><a href="<?php echo $permalink; ?>"><img class="img-responsive" src="<?php echo $feat_image; ?> "></a>
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