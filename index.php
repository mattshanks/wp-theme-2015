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
		<div class="row section banner">
				<div class="section-title">Picture books <span class="title-metadata">New and Upcoming</span></div>
				<div class="col-lg-4 col-md-4 col-sm-4 book">
					<!--<div class="coming-soon-label tk-brandon-grotesque">IN STORE FEB 1st 2017</div>-->
					<a class="img-link" href="http://books.mattshanks.com.au/twinkle-twinkle-little-star-aussie-nursery-rhyme.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/TTLS-Banner.jpg" alt="Twinkle Twinkle Little Star, Matt Shanks, Scholastic Australia" /></a>
					<h2>Twinkle Twinkle Little Star</h2>
					<p>Come aboard with the Aussie animals on an adventure down the stream, as they all try to squeeze into a tiny boat. But look out, someone else is following too!</p>
					<h3 class="tk-brandon-grotesque">Available 1 Feb, <span class="price">$14.99</span><span class="currency">RRP</span></h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 book">
					<a class="img-link" href="http://books.mattshanks.com.au/row-row-row-your-boat-aussie-nursery-rhyme.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/RRYB-Banner.jpg" alt="Row, Row, Row Your Boat, Matt Shanks, Scholastic Australia" /></a>
					<h2>Row Row Row Your Boat</h2>
					<p>Come aboard with the Aussie animals on an adventure down the stream, as they all try to squeeze into a tiny boat. But look out, someone else is following too!</p>
					<h3 class="tk-brandon-grotesque">Available now, <span class="price">$14.99</span><span class="currency">RRP</span></h3>
					<a class="button tk-brandon-grotesque" href="http://books.mattshanks.com.au/row-row-row-your-boat-aussie-nursery-rhyme.html" target="_blank">See more</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 book">
					<a class="img-link" href="http://books.mattshanks.com.au/sleigh-ride-christmas-picture-book.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/SR-cover.jpg"  alt="Sleigh Ride by Matt Shanks, Scholastic Australia" /></a>
					<h2>Sleigh Ride</h2>
					<p>The trailer is decorated, the sun is shining, there's ice in the esky and enough ice-cream for everyone... Giddy up and come along on a fun summer sleigh ride!</p>
					<h3 class="">Available now, <span class="price">$19.99</span><span class="currency">RRP</span></h3>
					<a class="button tk-brandon-grotesque" href="http://books.mattshanks.com.au/sleigh-ride-christmas-picture-book.html" target="_blank">See more</a>
				</div>	
							
		</div>
		
		<div class="row divider"></div>
		
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
		</div><!--#container -->
	
	<br clear="both" />
	
	<!-- Begin MailChimp Signup Form -->

	<div class="row signup section col-lg-12 col-md-12 col-sm-12">
	
		<div class="col-lg-6 col-md-6 col-sm-12">
		<img src="<?php bloginfo('template_directory'); ?>/images/Subscribe.jpg" alt="Twinkle Twinkle Little Star, Matt Shanks, Scholastic Australia" width="75%" />
		</div>

		<div id="mc_embed_signup" class="col-lg-6 col-md-6 col-sm-12">
			<h2 class="section-title">10% off your first delivery. Awesome!</h2>
			<form action="//mattshanks.us9.list-manage.com/subscribe/post?u=74a7c46c509135c0f0d710c0f&amp;id=fe6e864968" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			<!--<label for="mce-EMAIL">Sign up</label>-->
			
			<p>Plus you'll get: </p>
			<ul class="fa-ul">
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Promo codes for my store</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Watercolour tips</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Behind-the-scenes sketches</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Times that I make mistakes</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Extra artwork you don't see anywhere else</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>A round-up of the best illustrators out there in social media</li>
			</ul>
			<p>
				Emails only go out once every 2 months or so - I definitely won't be spamming your inbox.
			</p>
				<input type="text" value="" name="FNAME" class="name" id="mce-FNAME" placeholder="First name">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>

				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_74a7c46c509135c0f0d710c0f_fe6e864968" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Send my discount code" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
		
	</div>
	
	<div class="row section socialmedia col-lg-12 col-md-12 col-sm-12">
	
	<h2 class="section-title">Follow on social media to keep up to date</h2>
	
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
		<a class="socialbutton" href="http://instagram.com/matt_shanks" target="_blank">
		<i class="fa fa-instagram"></i>Instagram</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<a class="socialbutton" href="http://fb.com/mattshanksbooks" target="_blank">
		<i class="fa fa-facebook"></i>Facebook
		</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<a class="socialbutton" href="https://twitter.com/mattshanks_" target="_blank">
		<i class="fa fa-twitter"></i>Twitter
		</a>
		</div>
	
	</div>



<!--End mc_embed_signup-->
	
	<!--<ul class="row continue">
		<li><a href="http://www.instagram.com/matt_shanks" target="_blank"><i class="fa fa-instagram"></i>More on Instagram</a></li>
		<li><a href="<?php echo home_url();?>/contact" target=""><i class="fa fa-pencil-square-o"></i>Subscribe for updates</a></li>
	</div>
	-->
	
	


<?php get_footer(); ?>