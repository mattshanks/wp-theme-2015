// external js

var $loadingIndicator;

$( function() {
  
  var $container = $('#container');
  $loadingIndicator = $('#loading-indicator');
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