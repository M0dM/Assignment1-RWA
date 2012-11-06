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
    var end = itbRoad;
    var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
    	if (status == google.maps.DirectionsStatus.OK) {
          $("#directions_panel").empty();
          directionsDisplay.setDirections(response);
          }
        else{
        	alert("Status problem");
        }
      });
  }