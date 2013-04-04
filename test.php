<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple MarkersGoogle Maps Multiple MarkersGoogle Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false"     type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [['Flat No.B14/332, Kendriya Vihar, Vellappan Chavadi, Chennai-600 077, India', 13.061043, 80.138354, 4]   ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(13.061043, 80.138354),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
