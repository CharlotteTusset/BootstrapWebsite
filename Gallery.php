<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gallery</title>

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
</div><br><br>

<div class="Gallery-cont">

	<p>Welcome to our peaceful places inspired by traditional Japanese houses, close to the nature and to the ground. <br> 我田引水 </p> 

	<!-- Pictures -->
	<div class="page1">
		<div class="row" id="deco">
		  <div class="column">
		    <img src="images/deco-resto.jpg" alt="deco-resto" style="width:100%">
		  </div>
		  <div class="column">
		    <img src="images/interior.jpg" alt="decor" style="width:100%">
		  </div>
		  <div class="column">
		    <img src="images/deco.jpg" alt="interior" style="width:100%">
		  </div>
		</div>
	</div>
<br><br>
	<!-- Pagination -->
	<nav aria-label="PicturesNavigation">
	  <ul class="pagination pagination-lg justify-content-center">
	    <li class="page-item">
	      <a class="page-link" href="Gallery.php" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	        <span class="sr-only">Previous</span>
	      </a>
	    </li>
	    <li class="page-item"><a class="page-link" href="Gallery.php">1</a></li>
	    <li class="page-item"><a class="page-link" href="page2.html">2</a></li>
	    <li class="page-item"><a class="page-link" href="page3.html">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="page3.html" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	        <span class="sr-only">Next</span>
	      </a>
	    </li>
	  </ul>
	</nav>
</div>

</div>
</body>

<footer>Powered by Charlotte Tusset
</footer>