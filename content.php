<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header">
		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
	</header>
	<!-- .entry-header -->
	<div class="double-border"></div>

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php echo the_content(); ?>
	</div><!-- .entry-summary -->
	
	<?php else : ?>
	<div class="entry-content">
		<!--
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
		-->
		
		<!-- <?php the_excerpt();?> -->
		<?php echo the_content(); ?>
		
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
		
		
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
