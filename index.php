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
		<!-- Begin MailChimp Signup Form -->
	<div class="row signup section col-lg-12 col-md-12 col-sm-12">
	
		<div class="col-lg-6 col-md-6 col-sm-12">
		<img src="<?php bloginfo('template_directory'); ?>/images/Subscribe.jpg" alt="Image of a stork carrying a baby" width="75%" />
		</div>

		<div id="mc_embed_signup" class="col-lg-6 col-md-6 col-sm-12">
			<h2 class="section-title">Join the tribe and get to know me better</h2>
			<form action="//mattshanks.us9.list-manage.com/subscribe/post?u=74a7c46c509135c0f0d710c0f&amp;id=fe6e864968&SIGNUP=HomePage" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			<!--<label for="mce-EMAIL">Sign up</label>-->
			
			<p>You'll get things like:</p>
			<ul class="fa-ul">
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>An inside look at my process for making art</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Art tips and how to get started making your own</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Behind-the-scenes sketches</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Times that I make mistakes</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Early notice about new releases</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>Extra artwork you don't see anywhere else</li>
				<li><i class="fa-li fa fa-check-circle" aria-hidden="true"></i>A round-up of the best illustrators out there in social media</li>
			</ul>
			<p>
				Emails only go out once every 2 months or so - I definitely won't be spamming your inbox
			</p>
				<input type="text" value="" name="FNAME" class="name" id="mce-FNAME" placeholder="First name">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>

				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_74a7c46c509135c0f0d710c0f_fe6e864968" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Raaar, Let's go!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
		
	</div>
	<!-- END Mailchimp -->
	
	
	
	
		<div class="row section banner">
				<div class="section-title">Picture books <span class="title-metadata">Upcoming and Available now</span></div>
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<a class="img-link" href="https://www.booktopia.com.au/head-shoulder-knees-and-toes-matt-shanks/prod9781760276942.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/hskt-cover.jpg" alt="Head Shoulders Knees and Toes, Matt Shanks, Scholastic Australia" /></a>
					<!--<h2>Head, Shoulder, Knees and Toes</h2>-->
					<h3 class="tk-brandon-grotesque coming-soon-label">Coming April 2018 <span class="price">$14.99</span><span class="currency">RRP</span></h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<a class="img-link" href="http://books.mattshanks.com.au/koala-bare-jackie-french-matt-shanks.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/koalabare-cover.jpg" alt="Koala Bare, Jackie French and Matt Shanks, HarperCollins Australia" /></a>
					<!--<h2>Koala Bare</h2>-->
					<h3 class="tk-brandon-grotesque coming-soon-label">Available Now <span class="price">$24.99</span><span class="currency">RRP</span></h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<!--<div class="coming-soon-label tk-brandon-grotesque">IN STORE FEB 1st 2017</div>-->
					<a class="img-link" href="http://books.mattshanks.com.au/eric-the-postie-matt-shanks.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/Eric-Banner.jpg" alt="Eric the Postie, Matt Shanks, Scholastic Australia" /></a>
					<!--<h2>Eric the Postie</h2>-->
					<h3 class="tk-brandon-grotesque">Available now, <span class="price">$16.99</span><span class="currency">RRP</span></h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<a class="img-link" href="http://books.mattshanks.com.au/row-row-row-your-boat-aussie-nursery-rhyme.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/RRYB-Banner.jpg" alt="Row, Row, Row Your Boat, Matt Shanks, Scholastic Australia" /></a>
					<!--<h2>Row Row Row Your Boat</h2>-->
					<h3 class="tk-brandon-grotesque">Available now, <span class="price">$14.99</span><span class="currency">RRP</span></h3>
					<a class="button tk-brandon-grotesque" href="http://books.mattshanks.com.au/row-row-row-your-boat-aussie-nursery-rhyme.html" target="_blank">See more</a>
				</div>	
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<!--<div class="coming-soon-label tk-brandon-grotesque">IN STORE FEB 1st 2017</div>-->
					<a class="img-link" href="http://books.mattshanks.com.au/twinkle-twinkle-little-star-aussie-nursery-rhyme.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/TTLS-Banner.jpg" alt="Twinkle Twinkle Little Star, Matt Shanks, Scholastic Australia" /></a>
					<!--<h2>Twinkle Twinkle Little Star</h2>-->
					<h3 class="tk-brandon-grotesque">Available now, <span class="price">$14.99</span><span class="currency">RRP</span></h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 book">
					<a class="img-link" href="http://books.mattshanks.com.au/sleigh-ride-christmas-picture-book.html"><img class="feature" src="<?php bloginfo('template_directory'); ?>/images/SR-cover.jpg"  alt="Sleigh Ride by Matt Shanks, Scholastic Australia" /></a>
					<!--<h2>Heads, Shoulders, Knees and Toe</h2>-->
					<h3 class="">Available now, <span class="price">$19.99</span><span class="currency">RRP</span></h3>
					<a class="button tk-brandon-grotesque" href="http://books.mattshanks.com.au/sleigh-ride-christmas-picture-book.html" target="_blank">See more</a>
				</div>			
		</div>
		
		<div class="row divider"></div>
		
		<!-- A boat of stars -->
	
	<div class="row section book-preview col-lg-12 col-md-12 col-sm-12">
		<div class="col-lg-5 col-md-4 col-sm-12">
		<a href="https://www.angusrobertson.com.au/books/a-boat-of-stars/p/9780733337932?utm_medium=32028&utm_source=APD-Affiliate"><img src="<?php bloginfo('template_directory'); ?>/images/abos-cover.jpg" alt="A Boat of Stars, Matt Shanks, ABC Books" width="70%" /></a>
		</div>
		<div class="col-lg-7 col-md-8 col-sm-12 content">
			<h2 class="section-title">A Boat of Stars: New poems to inspire and enchant</h2>	
			<p>
				Matt's illustrations are part of a beautiful anthology of new Australian poetry for preschool and primary-aged children, and include some of our country's finest writers and illustrators.
			</p>
			<p>
				<em>
				A boat of stars came down tonight<br/>
				and sailed around my bed - <br/>
				it sprinkled stardust on my eyes, <br/>
				put dreams inside my head <br/>
				</em>
			</p>
			<p>
				Open worlds of imagination and explore the magic of everyday life with this enchanting new collection of poetry from some of Australia's most-loved writers and illustrators.
			</p>
			<p>
				Perfect for the classroom and the home, A Boat of Stars will bring a love of language, rhythm and rhyme to every child.
			</p>
			<p>For ages 3-10</p>
			
				<a class="button tk-brandon-grotesque" href="https://www.angusrobertson.com.au/books/a-boat-of-stars/p/9780733337932?utm_medium=32028&utm_source=APD-Affiliate">Order today</a>
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
								$permalink = get_permalink( $id );
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
	<div class="row divider"></div>
					
					<div class="row section morearticles">
							<div class="section-title">
								Latest from the journal
							</div>
							
									<?php
										$args = array( 'posts_per_page' => 4, 'category_name' => 'articles', 'orderby' => 'date');
										$myposts = get_posts( $args );
										foreach ( $myposts as $post ) : setup_postdata( $post ); 
										$curr_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<a class="relatedarticle" href="<?php the_permalink(); ?>">
												<img src="<?php echo $curr_feat_image?>" />
												<p class="entry-date tk-brandon-grotesque"><?php the_date(); ?></p>
												<p class="heading"><?php echo get_the_title() ?></p>
											</a>
										</div>	
										<?php endforeach; 
										wp_reset_postdata();?>
					
					</div>
					
					<div class="row divider"></div>
	
	
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