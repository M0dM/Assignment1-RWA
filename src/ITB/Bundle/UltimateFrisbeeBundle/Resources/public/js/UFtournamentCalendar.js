$("document").ready(function(){
	// Variable declaration
	var tournaments = [ ];
	
	// Calendar creation
	$("#calendar").datepicker(({ 
       onSelect: function(date) { 
    	   $("#tournamentCalendarTable tbody tr").remove();
    	   $.each(tournaments, function(i, l){
    		   if(tournaments[i].date == date){
    			   $("#tournamentCalendarTable tbody").append("<tr></tr>");
                   $("#tournamentCalendarTable tbody tr:last").append("<td>"
	                    		 						+ tournaments[i].tournamentTitle +"</td><td>"
	                    		 						+ tournaments[i].date +"</td><td>"
	                    		 						+ tournaments[i].country +"</td><td>"
	                    		 						+ tournaments[i].location +"</td><td>"
	                    		 						+ tournaments[i].surface +"</td><td>"+ 
	                    		 						tournaments[i].description +"</td>");
    		   }
    	   });
    	   changeRowsColor(tournaments);
       },
	   onChangeMonthYear: function(year, month) {
		   changeRowsColor(tournaments);
	   }
    }));
		
	// Retrieve tournaments from json file
	$.ajax({
        url: $("#tournamentCalendarTable").attr("dataUrl"),
        dataType: 'json',
        cache: false,
        success: function(data){
            $.each(data.tournaments, function(index) {
            	tournaments[index] = data.tournaments[index];
            });
            changeRowsColor(tournaments);
          }
    });
});

function changeRowsColor(tournaments){
	console.log('EXECUTION');
	$("#calendar td").each(function(i,l){
		var currentTd = $(this);
		$.each(tournaments, function(i,l){
			if(currentTd.attr('data-year') == getYear(tournaments[i].date) && parseInt(currentTd.attr('data-month'))+1 == getMonth(tournaments[i].date) && currentTd.children("a:first").text() == getDay(tournaments[i].date)){
				currentTd.children('a').css("color", "green");
			}
		});
	});
}

function getYear(date){
	var dateSplited = date.split('/');
	return dateSplited[2];
}

function getMonth(date){
	var dateSplited = date.split('/');
	return dateSplited[0];
}

function getDay(date){
	var dateSplited = date.split('/');
	return dateSplited[1];
}