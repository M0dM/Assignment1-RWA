$("document").ready(function(){
	$('#contactMenuPlaceholder').mouseenter(function(){
		$('#contactMenuPlaceholder').append('<div></div>');
		$('#contactMenuPlaceholder div').css('position', 'relative');
		var contactItemHeight = $('#contactMenuPlaceholder div').attr("height");
		$('#contactMenuPlaceholder div').css('display','block').css('position','absolute').css('top', contactItemHeight ).css('left','0px');
		$('#contactMenuPlaceholder div').append(
			'<ul id="contactSubMenuList">'+
				'<li><a href="#">General informations</a></li>'+
				'<li>'+
		        '<a href="#">Description file</a>'+
		        '<ul>'+
		            '<li><a href="#">Download</a></li>'+
		            '<li><a href="#">View</a></li>'+
		        '</ul>'+
		        '</li>'+
				'<li><a href="#">Map</a></li>'+
			'</ul>');
		$("#contactSubMenuList").css("width","200px");
		$("#contactSubMenuList").menu();
	});
	$('#contactMenuPlaceholder').mouseleave(function(){
		$('#contactMenuPlaceholder div').remove();
	});
});