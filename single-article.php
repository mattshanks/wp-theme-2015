<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	<?php
	
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$thisPostID = get_the_ID();
					$permalink = get_permalink( $id, $leavename );
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$title = get_the_title( $ID );
					?>
					<div id="custom-page" class="article">
						<div class="row">	
							<h1><?php echo $title ?></h1>
							<div class="image">
								<img class="img-responsive main" src="<?php echo $feat_image ?>"/>
							</div>
							<div class="story">
								  <?php echo the_content(); ?>								  
							</div>
						</div>
						
					</div> <!-- End custom Page -->	
					
					<div class="row divider"></div>
					
					<div class="row section morearticles">
							<div class="section-title">
								Keep reading
							</div>
							
									<?php
										$args = array( 'posts_per_page' => 3, 'exclude' => $thisPostID, 'category_name' => 'articles', 'orderby' => 'rand');
										$myposts = get_posts( $args );
										foreach ( $myposts as $post ) : setup_postdata( $post ); 
										$curr_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
										<div class="relatedarticle col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="<?php the_permalink(); ?>"><img src="<?php echo $curr_feat_image?>"/><?php echo get_the_title($ID) ?></a></div>	
										<?php endforeach; 
										wp_reset_postdata();?>
						</div>
					
					<div class="row divider"></div>
								
					<div class="row section related">
						<div class="section-title">
								Other short adventures
							</div>
							<div id="grid">
								<?php
									$args = array( 'posts_per_page' => 5, 'exclude' => $thisPostID, 'category_name' => 'prints');
									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); 
									$curr_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
									<div class="grid-sizer"></div>
									<div class="item"><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $curr_feat_image ?>"/></a></div>	
									<?php endforeach; 
									wp_reset_postdata();?>
							</div>
					</div>					
					<?php
				}
			}
		?>	

<?php
get_footer();
