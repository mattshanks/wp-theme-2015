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
					$paper = get_post_meta( $thisPostID, 'Paper' , true );
					$includes = get_post_meta( $thisPostID, 'Includes' , true );
					$price = get_post_meta( $thisPostID, 'Price' , true );
					$size = get_post_meta( $thisPostID, 'Size' , false );
					$sizelist = implode("<br/>", $size);
					$allsizes = implode("|", $size);
					$stocklevel = get_post_meta( $thisPostID, 'Stock level' , true );
					$artistnotes = get_post_meta( $thisPostID, 'Notes' , true );
					$title = get_the_title( $ID );
					list($width, $height) = getimagesize($feat_image);
					if ($width > $height){
					$col_layout = "col-sm-7";
					}
					else {
					$col_layout = "col-sm-6";
					}
					?>
					<div class="row">
						<div class="row colour piece">
							<div class="<?php echo $col_layout ?>">
								<img class="img-responsive main" src="<?php echo $feat_image ?>"/>
							</div>
							<div class="col-sm-5">
							<h3><?php echo $title ?></h3>
							<div class="story">
								  <?php echo the_content(); ?>
								  <table class="table productdetails">
									 <tbody>
										<tr>
										  <td class="sm-caps" colspan="2">Details</td>
										
										</tr>
										<tr>
										   <td>Artwork</td>
										   <td>Giclee print, unframed, signed by the artist</td>
										</tr>
										<tr>
										   <td>Paper</td>
										   <td>Archival 300gsm Watercolour Hahnemuhle Etching</td>
										</tr>
										<tr>
										  <td>Size/s</td>
										  <td><?php echo $sizelist ?></td>
										</tr>
										<tr>
										  <td>Includes</td>
										  <td>Story card to mount alongside artwork</td>
										</tr>
										<tr>
										  <td><a href="shipping-and-policies">Shipping</a></td>
										  <td>FREE worldwide</td>
										</tr>
										<tr>
										  <td>Price</td>
										  <td><?php echo $price ?><span class='sm-caps currency'>AUD</span></td>
										</tr>
									 </tbody>
								  </table>
								  <!-- <a class="btn btn-default sm-caps shopbutton" href="http://shortadventures.etsy.com"><i class="fa fa-paypal"></i> Checkout with PayPal</a> -->
								 <?php 
								 if ($stocklevel != '0' && sizeof($size)>1){
								 	 echo do_shortcode('[wp_cart_button name="'.$title.'" price="'.$price.'" thumbnail="'.$feat_image.'" var1="Size|'.$allsizes.'"]');
									 }
									 else if ($stocklevel != '0' && sizeof($size)==1){
									 echo do_shortcode('[wp_cart_button name="'.$title.'" price="'.$price.'" thumbnail="'.$feat_image.'"]');
									 }
									 else {
									 echo "<span class='outofstock'><i class='fa fa-frown-o'></i>Sorry, this is sold out</span><br/><br/><a class='notifyme' href='mailto:hi@mattshanks.com.au?subject=I want to know when your &ldquo;$title&rdquo; print is back in&body='><i class='fa fa-envelope'></i>Tell me when more come in</a>";
									 }
								  ?>
								  
								  <blockquote>
									  Artist notes:
									  <?php echo $artistnotes ?>
								  </blockquote>
							</div>
							</div>
						</div>
					</div>	
					<div class="row related">
						<h4>Other short adventures</h4>
							<div id="container">
								<?php
									$args = array( 'posts_per_page' => 20, 'exclude' => $thisPostID);
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
