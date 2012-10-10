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
	
	refreshAccordion(0, links, names, urls);
	
	$(".imageRotatorPlaceholder .accordionSmallImages img").live("mouseenter",function(){
		$(this).css("width","250px");
	});
	
	$(".imageRotatorPlaceholder .accordionSmallImages img").live("mouseleave",function(){
		$(this).css("width","200px");
	});
	
	$(".accordionSmallImages img").live("click", function(){
		refreshAccordion($(this).attr("imageId"), links, names, urls);
	});
});

function refreshAccordion(index, links, names, urls){
	//removing old accordion
	$(".accordionImageCurent").remove();
	$(".accordionSmallImages").remove();
	
	// Defining the size of the accordion
	$(".imageRotatorPlaceholder").css("height", "200px");
	$(".imageRotatorPlaceholder").append('<div class="accordionImageCurent">');
	$(".imageRotatorPlaceholder .accordionImageCurent").append('<img src="'+links[index]+'" alt="'+names[index]+'"/>' );
	$(".imageRotatorPlaceholder").append('<div class="accordionSmallImages">');
	
	//adding the small images after the current image in the links array
	var i = 0;
	while(i < links.length){
		$(".imageRotatorPlaceholder .accordionSmallImages").append('<div id="imageAccordion'+i+'">')
		$(".imageRotatorPlaceholder .accordionSmallImages #imageAccordion"+i).append('<img imageId="'+ i +'" src="'+links[i]+'" alt="'+names[i]+'"/>' );
		i++;
	}
	
}