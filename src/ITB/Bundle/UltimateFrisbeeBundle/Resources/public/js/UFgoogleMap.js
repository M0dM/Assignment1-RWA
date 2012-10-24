$("document").ready(function(){
	initialize();
});

  var directionDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var itb = new google.maps.LatLng(53.405617,-6.378057);
    var mapOptions = {
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: itb
    }
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('directions_panel'));
  }

  function calcRoute() {
    var start = document.getElementById('start').value;
    var end = 'Institute of Technology Blanchardstown, Blanchardstown Road North, Dublin 15';
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