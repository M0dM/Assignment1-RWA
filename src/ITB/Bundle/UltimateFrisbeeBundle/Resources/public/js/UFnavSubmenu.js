$("document").ready(function(){
	$('#navItemContact').mouseenter(function(){
		$('#contactNavItem').append('<div id="contactSubMenu"></div>');
		$('#contactNavItem').css('position', 'relative');
		$('#contactSubMenu').css('display','block').css('position','absolute').css('top','1px').css('left','0px');
		$('#contactSubMenu').append(
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
		$('#contactSubMenu').remove();
	});
});