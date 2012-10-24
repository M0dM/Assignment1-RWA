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
  }

  function calcRoute() {
    var start = document.getElementById('start').value;
    var end = 'Institute of Technology Blanchardstown, Blanchardstown Road North, Dublin 15';
    var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.DRIVING
    };
    alert("PLOPZOFJQOIFOQZF");
    directionsService.route(request, function(result, status) {
    	if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(result);
          $("#directions_panel").empty();
          // Display routes ----
          var route = response.routes[0];
          var summaryPanel = document.getElementById('directions_panel');
          summaryPanel.innerHTML = '';
          // For each route, display summary information.
          for (var i = 0; i < route.legs.length; i++) {
            var routeSegment = i + 1;
            summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment + '</b><br>';
            summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
            summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
            summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
          }
        }
        else{
        	alert("Status problem");
        }
      });
  }