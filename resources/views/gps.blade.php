<!DOCTYPE html>
<html>
    <head>
        <title>GPS Coordiantes</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Arial';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <script type="text/javascript">
	    function geoFindMe() {
	    	  var output = document.getElementById("out");
	
	    	  if (!navigator.geolocation){
	    	    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
	    	    return;
	    	  }
	
	    	  function success(position) {
	    	    var latitude  = position.coords.latitude;
	    	    var longitude = position.coords.longitude;
	
	    	    output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
	
	    	    var img = new Image();
	    	    img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=18&size=300x300&sensor=false";
	
	    	    output.appendChild(img);
	    	  };
	
	    	  function error() {
	    	    output.innerHTML = "Unable to retrieve your location";
	    	  };
	
	    	  output.innerHTML = "<p>Locating…</p>";
	
	    	  navigator.geolocation.getCurrentPosition(success, error);
	    	}
    </script>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">GPS</div>
                <p><button onclick="geoFindMe()">Show my location</button></p>
				<div id="out"></div>
            </div>
        </div>
    </body>
</html>
