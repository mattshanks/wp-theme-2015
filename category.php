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

	<div id="custom-page">
		<div id="primary" class="content-area">
			<div id="content" class="site-content story" role="main">
				<?php if ( have_posts() ) : ?>
				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( '', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
				</header><!-- .archive-header -->

				<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content-summary', get_post_format() );

						endwhile;
						// Previous/next page navigation.
						twentyfourteen_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div>	
	<br/>

<?php

get_footer();
?>
