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
		onChangeMonthYear: changeRowsColor(arrayTournaments)
    }));
	
	changeRowsColor(arrayTournaments);
});

function changeRowsColor(tournaments){
	console.log('EXECUTION');
	$("#calendar table td").each(function(i,l){
		var currentTd = $(this);
		$.each(tournaments, function(i,l){
			
			var tdMonth = parseInt(currentTd.attr('data-month'))+1+"";
			var tournamentMonth = getMonth(tournaments[i].date)+"";
			console.log(tournaments[i].date + " - " + tdMonth + " - " + tournamentMonth);
			if(currentTd.attr('data-year') == getYear(tournaments[i].date) && tdMonth == tournamentMonth && currentTd.children("a:first").text() == getDay(tournaments[i].date)){
				currentTd.children('a').css("color", "green");
				alert(''+ currentTd.attr('data-year') + " - " + parseInt(currentTd.attr('data-month'))+1 +" - " + currentTd.children("a:first").text());
				console.log(tdMonth);
			}
		});
	});
	console.log('EXECUTED');
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