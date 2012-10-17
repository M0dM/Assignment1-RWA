$("document").ready(function(){
	
	// hiding the images which were present into the list
	$(".imageRotatorPlaceholder ul").css("display", "none");
	
	// Decalaration vars
	var links = [ ];
	var names = [ ];
	var urls= [ ];
	
	// Getting all the links for the images
	$(".imageRotatorPlaceholder img").each(function(index){
		links[index] = $(this).attr("src");
		names[index] = $(this).attr("name");
		urls[index] = $(this).attr("href");
	});
	
	refreshAccordion(0, links, names, urls, true);
	$(".imageRotatorPlaceholder .accordionSmallImages img").live("mouseenter",function(){
		$(this).animate({
		    opacity: 0.8,
		    bgColor: "white",
		  }, 100 );
	});
	
	$(".imageRotatorPlaceholder .accordionSmallImages img").live("mouseleave",function(){
		$(this).animate({
		    opacity: 1,
		  }, 100 );
	});
	
	$(".accordionSmallImages img").live("click", function(){
		var clickedImage = $(this);
		$(".accordionImageCurent").animate({
		    opacity: 0.3,
		    top: '+50',
		    width: 'swing',
		  }, 600, function() {
			  refreshAccordion(clickedImage.attr("imageId"), links, names, urls, false);
		  });
	});
});

function refreshAccordion(index, links, names, urls, isFirstTime){
	//removing old accordion
	$(".accordionImageCurent").remove();
	$(".accordionSmallImages").remove();
	
	// Defining the size of the accordion
	$(".imageRotatorPlaceholder").css("height", "200px");
	$(".imageRotatorPlaceholder").append('<div class="accordionImageCurent">');
	$(".imageRotatorPlaceholder .accordionImageCurent").append('<a href="'+ "google.fr" +'"><img src="'+links[index]+'" alt="'+names[index]+'" /></a>' );
	$(".imageRotatorPlaceholder").append('<div class="accordionSmallImages">');
	
	//adding the small images after the current image in the links array
	var i = 0;
	while(i < links.length){
		$(".imageRotatorPlaceholder .accordionSmallImages").append('<div id="imageAccordion'+i+'">')
		$(".imageRotatorPlaceholder .accordionSmallImages #imageAccordion"+i).append('<img imageId="'+ i +'" src="'+links[i]+'" alt="'+names[i]+'"/>' );
		i++;
	}
	
}