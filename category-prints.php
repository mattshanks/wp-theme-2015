<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<!-- <script src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>
	<script src="http://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>-->

	<div id="">
		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
			<div class="row section">
			<div class="section-title">Short adventures <span class="title-metadata">Prints for sale</span></div>
			<div id="grid" class="row">
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
			</div>
		</div>
			</div><!-- #content -->
		</section><!-- #primary -->
	</div>	

<?php

get_footer();
