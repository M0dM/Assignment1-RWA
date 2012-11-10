var itbRoad = new google.maps.LatLng(53.403483,-6.378114);
var shop = new google.maps.LatLng(53.405374,-6.378379);
var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var marker;
var imageLink;

$("document").ready(function(){
	imageLink = $('#imageForLink').attr('src');
	$('#imageForLink').remove();
	$('#start').resizable();
	
	// initialize the map options
	var mapOptions = initialize();
	
	// create the map 
	map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	
	// link the pannel for directions informations with the map
	directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('directions_panel'));
	
    // put a marker on the map
    marker = new google.maps.Marker({
	   position: shop,
	   map: map,
	   title:"Ultimate Frisbee shop"
	});
    
    //create a circle 
    var ItbCircle = {
            strokeColor: '#FF0000',
            strokeOpacity: 0.2,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: shop,
            radius: 60
    };
    
    new google.maps.Circle(ItbCircle);
    
    var contentString = 
    	  '<img style="display:block; float:left; width:200px; margin-right:10px;" src="' + imageLink + '" alt="logoUltimateFrisbeeShop"/>' +
    	  '<div style="display:block; float:left;">'+
    	  	'<p style="color:black;"><strong>Ultimate Frisbee Shop:</strong>' +
    		'<br />'+
    		'address : Ultimate frisbee shop'+
    		'<br />'+
    		'Institute of Technology Blanchardstown,'+
    		'<br />'+
    		'Blanchardstown Road North,'+
    		'<br />'+
    		'Dublin 15 '+
    	  	'</p>'+
    	  '</div>';
    
    var infowindow = new google.maps.InfoWindow({
  	    content: contentString
    });
    
    google.maps.event.addListener(marker, 'click', function() {
  	  infowindow.open(map,marker);
  	});
});

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: itbRoad
    };
    return mapOptions;
  }
  
  function calcRoute() {
    var start = document.getElementById('start').value;
    var travelMode;
    var travelModeValue = $("input:radio[name=optionsTravelMode]:checked").val();
    if(travelModeValue == 'car'){
    	travelMode = google.maps.TravelMode.DRIVING;
    }
    else{
    	travelMode = google.maps.TravelMode.WALKING;
    }

    var end = itbRoad;
    var request = {
        origin: start,
        destination: end,
        travelMode: travelMode
    };
    directionsService.route(request, function(response, status) {
    	if (status == google.maps.DirectionsStatus.OK) {
          $("#directions_panel").empty();
          directionsDisplay.setDirections(response);
          }
        else{
        	alert("Unable to find the direction");
        }
      });
  }