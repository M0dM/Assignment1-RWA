
$("document").ready(function(){
	
	$('#tabs').tabs();
	
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
	
	refreshimageRotator(0, links, names, urls, true);
	$(".imageRotatorPlaceholder .imageRotatorSmallImages img").live("mouseenter",function(){
		$(this).animate({
			opacity: 0.8,
			bgColor: "white",
		}, 400 );
	});
	
	$(".imageRotatorPlaceholder .imageRotatorSmallImages img").live("mouseleave",function(){
		$(this).animate({
			opacity: 1,	
		}, 400 );
	});
	
	$(".imageRotatorSmallImages img").live("click", function(){
		var clickedImage = $(this);
		$(".imageRotatorImageCurent").animate({
			opacity: 0.3,
			top: '+50',
			width: 'swing',
		}, 600, function() {
			refreshimageRotator(clickedImage.attr("imageId"), links, names, urls, false);
		});
	});
});

function refreshimageRotator(index, links, names, urls, isFirstTime){
	
		//removing old imageRotator
		$(".imageRotatorImageCurent").remove();
		$(".imageRotatorSmallImages").remove();
		
		// Defining the size of the imageRotator
		$(".imageRotatorPlaceholder").css("height", "260px");
		$(".imageRotatorPlaceholder").append('<div class="imageRotatorImageCurent">');
		$(".imageRotatorPlaceholder .imageRotatorImageCurent").append('<a href="'+ "http://google.fr" +'"><img id="curent" src="'+links[index]+'" alt="'+names[index]+'" /></a>' );
		$(".imageRotatorPlaceholder").append('<div class="imageRotatorSmallImages">');

		//adding the small images after the current image in the links array
		var i = 0;
		while(i < links.length){
			$(".imageRotatorPlaceholder .imageRotatorSmallImages").append('<img imageId="'+ i +'" src="'+links[i]+'" alt="'+names[i]+'"/>' );
			i++;
		}
}
