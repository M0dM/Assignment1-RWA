$("document").ready(function(){
	$('#accordionPlaceholder').accordion();
	$(".textSizeOption").click(function(){
		var size = $(this).val();
			$('.content p').css("font-size",size);
			$('.content blockquote').css("font-size",size);
	});
});