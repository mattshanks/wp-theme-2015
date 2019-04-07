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
					$permalink = get_permalink( $id );
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$title = get_the_title( $thisPostID );
					?>
					<div id="custom-page" class="article">
						<div class="row">
							<p class="entry-date tk-brandon-grotesque"><?php the_date(); ?></p>	
							<h1><?php echo $title ?></h1>
							<div class="double-border"></div>
							<!--<div class="image">
								<img class="img-responsive main" src="<?php echo $feat_image ?>"/>
							</div>-->
							<div class="story">
								  <?php echo the_content(); ?>								  
							</div>
							<div id="newsletter">
			<h3>Join the mailing list</h3>
			<p>Matt sends out an occassional digest of interesting and inspiring art, tools and new techniques. Why not get yours:</p>
			<!-- Begin MailChimp Signup Form -->
			 <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			 <div id="mc_embed_signup">
			 <form action="//mattshanks.us9.list-manage.com/subscribe/post?u=74a7c46c509135c0f0d710c0f&amp;id=fe6e864968&SIGNUP=Blog" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				 <div id="mc_embed_signup_scroll">
				 <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
				 <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_74a7c46c509135c0f0d710c0f_fe6e864968" tabindex="-1" value=""></div>
				 <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				 </div>
			 </form>
			 </div>
			 <!--End mc_embed_signup-->
		</div>
						</div>
						
					</div> <!-- End custom Page -->	
					
					<div class="row divider"></div>
					
					<div class="row section morearticles">
							<div class="section-title">
								Keep reading
							</div>
							
									<?php
										$args = array( 'posts_per_page' => 3, 'exclude' => $thisPostID, 'category_name' => 'articles', 'orderby' => 'date');
										$myposts = get_posts( $args );
										foreach ( $myposts as $post ) : setup_postdata( $post ); 
										$curr_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<a class="relatedarticle" href="<?php the_permalink(); ?>">
												<div class="internalborder">
												<img src="<?php echo $curr_feat_image?>" />
												<p class="entry-date tk-brandon-grotesque"><?php the_date(); ?></p>
												<p class="heading"><?php echo get_the_title() ?></p>
												</div>
											</a>
										</div>	
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
