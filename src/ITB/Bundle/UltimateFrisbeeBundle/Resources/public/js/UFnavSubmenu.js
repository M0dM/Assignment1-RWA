$("document").ready(function(){
	$('#navItemContact').mouseenter(function(){
		$(this).append('<div id="contactNavItem"></div>');
		$('#contactNavItem').css('position', 'relative');
		var contactItemHeight = $('#contactNavItem').attr("height");
		$('#contactNavItem').css('display','block').css('position','absolute').css('top', contactItemHeight ).css('left','0px');
		$('#contactNavItem').append(
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
	$('#navItemContact').mouseleave(function(){
		$('#contactNavItem').remove();
	});
});