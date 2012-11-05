var originColor;
var originBackground;
$(document).ready(function() {
   $("#tournamentTable tbody tr").remove();
   $.ajax({
            url: $("#tournamentTable").attr("dataUrl"),
            dataType: 'json',
            cache: false,
            success: function(data){
                $.each(data.tournaments, function(index) {
                	 $("#tournamentTable tbody").append("<tr></tr>");
                     $("#tournamentTable tbody tr:last").append("<td>"
	                    		 						+ data.tournaments[index].tournamentTitle +"</td><td>"
	                    		 						+ data.tournaments[index].date +"</td><td>"
	                    		 						+ data.tournaments[index].country +"</td><td>"
	                    		 						+ data.tournaments[index].location +"</td><td>"
	                    		 						+ data.tournaments[index].surface +"</td><td>"+ 
	                    		 						data.tournaments[index].description +"</td>");
                });
              }
           });

   $("#tournamentTable tbody tr").live("mouseenter", (function(){
	   originBackground = $(this).css("background-color");
	   originColor = $(this).css("color");
	   $(this).css("background-color","#3f3030")
	   		  .css("color", "white");
   }));
   
   $("#tournamentTable tbody tr").live("mouseleave", (function(){
	   $(this).css("background-color",originBackground);
	   $(this).css("color", originColor);
   }));
   
});
