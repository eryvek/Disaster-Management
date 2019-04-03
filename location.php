<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
</head> 
  <body>      
  <div id="map" style="width: 1400px; height: 600px;"></div>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "panacea";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$lat_sql = "SELECT Lattitude FROM user_info";
		$lon_sql = "SELECT Longitude FROM user_info";
		$name_sql = "SELECT Name FROM user_info";
		$lat_result = $conn->query($lat_sql);
		$lon_result = $conn->query($lon_sql);
		$name_result = $conn->query($name_sql);
		$lat = array();
		$lon = array();
		$nam = array();
		$i = 0;
		if ($lat_result->num_rows > 0) {
			// output data of each row
			while($row = $lat_result->fetch_assoc()) {
				//echo "Lat : " . $row["Lattitude"]."<br>";
				$lat[$i] = $row["Lattitude"];
				$i++;
			}
		} else {
			echo "0 results";
		}
		$j = 0;
		if ($lon_result->num_rows > 0) {
			// output data of each row
			while($row = $lon_result->fetch_assoc()) {
				//echo "Lon : " . $row["Longitude"]."<br>";
				$lon[$j] = $row["Longitude"];
				$j++;
			}
		} else {
			echo "0 results";
		}
		$k = 0;
		if ($name_result->num_rows > 0) {
			// output data of each row
			while($row = $name_result->fetch_assoc()) {
				//echo "Lon : " . $row["Longitude"]."<br>";
				$nam[$j] = $row["Name"];
				$k++;
			}
		} else {
			echo "0 results";
		}
		$conn->close();
	?>
	<script>
		var latitude = <?php echo json_encode($lat); ?>;
		var longitude = <?php echo json_encode($lon); ?>;
		var names = <?php echo json_encode($nam); ?>;
		alert(names[1]);
		
		
		var locations = [
		  [names[2], latitude[2], longitude[2], 2],
		  [names[1], latitude[1], longitude[1], 1]
		];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(-33.92, 151.25),
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