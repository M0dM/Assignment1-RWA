var arrayTournaments = [ ];

$("document").ready(function(){

	// Retrieve tournaments from json file
	var tournaments = $.ajax({
					        url: $("#tournamentCalendarTable").attr("dataUrl"),
					        dataType: 'json',
					        cache: false,
					        async: false,
					        success: function(data){
					            	return data.tournaments;
					        }
					    });
	arrayTournaments = $.parseJSON(tournaments.responseText);
	arrayTournaments = arrayTournaments.tournaments;
	console.log(arrayTournaments);
	
	var SelectedDates = {};
    $.each(arrayTournaments, function(i, l){
    	console.log(arrayTournaments[i].date);
    	SelectedDates[new Date(arrayTournaments[i].date)] = new Date(arrayTournaments[i].date);
    });
    

	// Calendar creation
	$("#calendar").datepicker(({ 
       onSelect: function(date) { 
    	   $("#tournamentCalendarTable tbody tr").remove();
    	   $.each(arrayTournaments, function(i, l){
    		   if(arrayTournaments[i].date == date){
    			   $("#tournamentCalendarTable tbody").append("<tr></tr>");
                   $("#tournamentCalendarTable tbody tr:last").append("<td>"
	                    		 						+ arrayTournaments[i].tournamentTitle +"</td><td>"
	                    		 						+ arrayTournaments[i].date +"</td><td>"
	                    		 						+ arrayTournaments[i].country +"</td><td>"
	                    		 						+ arrayTournaments[i].location +"</td><td>"
	                    		 						+ arrayTournaments[i].surface +"</td><td>"+ 
	                    		 						arrayTournaments[i].description +"</td>");
    		   }
    	   });
       },
       beforeShowDay: function(date) {
           var Highlight = SelectedDates[date];
           console.log(SelectedDates[date]);
           if (Highlight) {
               return [true, "Highlighted", ''];
           }
           else {
               return [true, '', ''];
           }
       }
    }));
});

