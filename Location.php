<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Location</title>

	<!-- Links towards Bootstrap, Font-Awesome -->
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
</head> 

<body>
<div class="main">

<!-- Navbar -->
<div class="nav-container">
	<nav class="navbar fixed-top navbar-light bg-light">
		<a class="navbar-home" href="index.php"><i class="fas fa-home"></i> Home</a>
		<a class="navbar-menu" href="Menu.php"><i class="fas fa-utensils"></i> Menu</a>
		<a class="navbar-gallery" href="Gallery.php"><i class="fas fa-images"></i> Gallery</a>
		<a class="navbar-location" href="Location.php"><i class="fas fa-thumbtack"></i> Location</a>
		<a class="navbar-contact" href="contact.php"><i class="fas fa-phone-square"></i> Contact</a>
	</nav>
</div><br><br>

<!-- Location and adress/opening hours of restaurant / by grid -->
<div class="Loc-container">
  <div class="row">
  	<!-- Google Maps -->
    <div class="col-sm map-container">
    	<div class="map-responsive" id="Brussels">
    		<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJnbgB_kHbw0cReNmHqJALsEo&key=AIzaSyB9ZZerHrSS7OG2ErQ9C6-jbCtIUVgPXrA" allowfullscreen></iframe>
    	</div>
    </div>
    <div class="col-sm text-content">
    	<h3>Ukiyo Brussels</h3>
    	<p>Parc Platane<br>Avenue du Parc de Woluwe<br>1150 Woluwe-Saint-Pierre<br>Belgium</p>
    	<p><b>Opening hours</b><br>Monday: closed<br>Tuesday to Thursday: 11AM - 10PM<br>Friday & Saturday: 11AM - Midnight<br>Sunday: 11AM - 4PM</p>
    </div>
    <div class="w-100"></div>
    <div class="col-sm text-content">
    	<br><br><h3>Ukiyo Amsterdam</h3>
    	<p>Het Amsterdam Bos - Park<br>De Duizendmeterweg<br>Amstelveen<br>The Netherlands</p>
    	<p><b>Opening hours</b><br>Monday to Thursday: 10AM - 10PM<br>Friday & Saturday: 11AM - Midnight<br>Sunday: 11AM - 4PM</p>
    </div>
    <div class="col-sm">
    	<!-- Google Maps -->
    	<div class="col map-container">
    	<div class="map-responsive" id="Amsterdam">
    		<iframe style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-XArqL_hxUcRVaCzwBJt9aQ&key=AIzaSyB9ZZerHrSS7OG2ErQ9C6-jbCtIUVgPXrA" allowfullscreen></iframe>
    	</div>
    </div>
  </div>
</div>


<!--JS-->
<script type="text/javascript" src="GoogleMap.js"></script>
<!--Google Maps-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9x1tOXsiIvPcIV9IWweGDxLIzrPcNLhM&callback=initMap"
type="text/javascript"></script>


</body>

<footer>Powered by Charlotte Tusset
</footer>