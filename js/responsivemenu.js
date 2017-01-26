/** Hide and show responsive menu on click and window resize **/


$(document).ready(function(){
    $("#viewmenu").click(function(){
	 $("#menu-main-menu").slideToggle(500);
    }); 
});

$(window).resize(function() {
if ($(window).width() < 768) {
   $("#menu-main-menu").hide();
   $("#viewmenu").show();
		}
	else {
  	 $("#menu-main-menu").show();
  	 $("#viewmenu").hide();
		}
 	});