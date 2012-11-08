//////////////////////////////////////////////////////////////
//// Plugin by Benoit Brayer 
//// Generate a sub JqueryUI menu on a bootstrap navbar item
//////////////////////////////////////////////////////////////

jQuery.fn.generateSubMenu = function(){
    
	return this.each(function(){
    	//get the height of the bootstrap menu item for the curent theme
    	var menuItemHeight = $(this).children("div").attr("height");
    	
    	//by default we don't display the submenu
    	$(this).children("div").css("display", "none");
    	
    	////////////////////////////////////////////////////////////
    	/// Events : mouseenter / mouseleave on bootstrap menu Item
    	////////////////////////////////////////////////////////////
    	
    	$(this).mouseenter(function(){
    	/* mouse on the menu item element chosed */
    		
    		//position relative on the navbar item
    		$(this).css('position', 'relative').css('z-index', "999");
    		
    		$(this).children("div").css("display", "block")
    					   .css('position', 'absolute')
    					   .css('top', menuItemHeight )
    					   .css('left','0px');
    		//calling the menu function of jqueryUI plugin
    		$(this).children("div").find('ul').css('width','200px').menu();
    	
    	});

    	$(this).mouseleave(function(){
        /* mouse leaving the menu item element chosed */
    	
    		$(this).children("div").css("display", "none");
        
    	});

    	/////////////////////////////////////////////////////////////
    
	});
};
