<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Menu</title>

	<!-- Links towards Bootstrap, Font-Awesome -->
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
</div>
<br><br><br>

<!-- Intro -->
<div class="title">
	<img src="images/manekineko.jpg" alt="manekineko" width="50px"><br><br>
	<p>At Ukiyo, we are concerned of what you have on your plate. We guarantee you fresh and organic food, as well as traceable. As far as possible, we get our food from small producers while preserving the true Japanese cooking traditions.<br>召上がれ - Meshiagare.</p>
</div>

<!-- Badges -->
<div class="badge-menu">
	<a href="#Starters" class="badge badge-info">Starters</a>
	<a href="#MainCourses" class="badge badge-info">Main courses</a>
	<a href="#Desserts" class="badge badge-info">Desserts</a>
	<a href="#Drinks" class="badge badge-info">Drinks</a>
</div>
<br>
<!-- Images -->
<div class="menu-img">
	<img class="img" src="images/chef.jpeg" alt="chef" style="width:47%">
	<img class="img" src="images/chef-sushis.jpg" alt="chef-sushis" style="width:47%">
</div>
<br><br>

<!-- Menu -->
<div class="menu">
	<div class="row">
		<div class="col" id="Starters">
			<h2>Starters</h2>
			<ul class="list-group">
			  <li class="list-group-item">Spicy wakame</li>
			  <li class="list-group-item">Steamed edamame</li>
			  <li class="list-group-item">Tempura schrimps</li>
			  <li class="list-group-item">Miso Soup</li>
			  <li class="list-group-item">Chef-inspired gyozas (6)</li>
			  <li class="list-group-item">Chef-inspired maki (6)</li>
			  <li class="list-group-item">Karaage chicken</li>
			</ul>
		</div>
		<div class="col" id="MainCourses">
			<h2>Main courses</h2>
			<ul class="list-group">
			  <li class="list-group-item">Sea Donburi</li>
			  <li class="list-group-item">Teriyaki Beef</li>
			  <li class="list-group-item">Pork Ramen</li>
			  <li class="list-group-item">Veggie Udon</li>
			  <li class="list-group-item">Mix of sushis (12)</li>
			  <li class="list-group-item">Surprise of the Chef</li>
			</ul>
		</div>
		<div class="col" id="Desserts">
			<h2>Desserts</h2>
			<ul class="list-group">
			  <li class="list-group-item">Mochi</li>
			</ul>
		</div>
		<div class="col" id="Drinks">
			<h2>Drinks</h2>
			<ul class="list-group">
			  <li class="list-group-item">Water</li>
			  <li class="list-group-item">Homemade Lemonade</li>
			  <li class="list-group-item">Ginger Kombucha</li>
			  <li class="list-group-item">Selection of Japanese tea</li>
			  <li class="list-group-item">Saké</li>
			  <li class="list-group-item">Asahi beer</li>
			  <li class="list-group-item">Selection of wines</li>
			</ul>
		</div>	
	</div>
</div>

</div>
</body>

<footer>Powered by Charlotte Tusset
</footer>