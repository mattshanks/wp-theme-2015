<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Picture book author and illustrator, Matt Shanks">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<!-- Custom Code -->
	
	<script src="https://use.fontawesome.com/ea99ff8ccf.js"></script>
	 
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Mail chimp sign up form css -->
    <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery.js"></script>	
	<script src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>
	<script src="http://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/responsivemenu.js"></script>
    <!-- <link rel="stylesheet" href="http://css-spinners.com/css/spinner/spinner.css" type="text/css"> -->

	<!--
    <script type="text/javascript">
		var $loadingIndicator;
		
		
		$( function() {
  
		  var $container = $('#container');
		  $loadingIndicator = $('.spinner');
		  // hide initial items
		  var $initialItems = $container.find('.item').hide();
  
		  var $container = $container.masonry({
			  itemSelector: '.item',
			  columnWidth: '.grid-sizer'
			})
			.masonryImagesReveal( $initialItems );
  
		});

		// reveals all items after all item images
		// have been loaded
		$.fn.masonryImagesReveal = function( $items ) {
		  var msnry = this.data('masonry');
		  var itemSelector = msnry.options.itemSelector;
		  $loadingIndicator.show();
		  // hide by default
		  $items.hide();
		  // append to container
		  this.append( $items );
		  $items.imagesLoaded( function() {
			// un-hide items
			$items.show();
			$loadingIndicator.hide();
			// reveal all of them
			msnry.appended( $items );
		  });
  
		  return this;
		};
		
		$( function() {
		   var $items = getItems();
		   // hide by default
		   $items.hide();
		   // append to container
		   $container.append( $items );
		   $items.imagesLoaded().progress( function( imgLoad, image ) {
			 // get item
			 // image is imagesLoaded class, not <img>, <img> is image.img
			 var $item = $( image.img ).parents('.item');
			 // un-hide item
			 $item.show();
			 // masonry does its thing
			 $container.masonry( 'appended', $item );
		   });
  		});
		</script>  
		-->
    
<script src="https://use.typekit.net/jcs0cyg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>

<body <?php body_class(); ?>>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12874634-4', 'auto');
  ga('send', 'pageview');

</script>


	<div class="row header">
    <!--<?php echo do_shortcode('[wp_compact_cart]'); ?>-->
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/mattshanks-logo.svg" class="headerimg" width="350" alt="Matt Shanks: Small adventures in words and pictures" /></a>
    <!--<h1><a href="<?php bloginfo('url'); ?>">Matt Shanks</a></h1>
    <h2>short adventures in words &amp; pictures</h2>-->
	<div id="viewmenu" class="sm-caps">menu</div>
	<?php wp_nav_menu( array( 'container_class' => 'nav nav-pills sm-caps', 'menu' => 'Main Menu' ) ); ?>
	
    </div>
	

	<div id="main" class="site-main">
