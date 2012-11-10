// Add a class to top-level list items.
$(document).ready(function() {
  $('#selected-product > li').addClass('horizontal');
  $('#selected-product li:not(.horizontal)').addClass('sub-level');
  $(".image a").live("mouseenter",function(){
	 var imageSrc = $(this).attr("href"); 
	 $(".image").css("position", "relative");
	 $(this).parent().append("<div class='imageAbsolute'><img src='"+ imageSrc +"' alt='imageTooltips'/></div>");
	 console.log("append-image");
  });
  $(".image a").live("mouseleave", function(){
		 $('.imageAbsolute').remove();
	  });
});
