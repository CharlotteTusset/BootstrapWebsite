<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contact</title>

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

<div class="img-back" alt="Osaka">

	<!-- Text -->
	<div class=text>
		<p>Do you want to book a table, follow our workshops, or discover the Japanese culture? Or do you want to propose activities or share your knowledge about Japan? At Ukiyo, we always look for new ideas so don't hesitate to contact us!</p>
	</div>

	<!--Social Media-->
	<div class="socialmedia">
		<div>
			<ul>
				<li> <a href="mailto:Ukiyo-resto@gmail.com" target="_blank">
						<span class="fa-stack fa-lg">
		              	<i class="fa fa-circle fa-stack-2x"></i>
		              	<i class="fas fa-at fa-stack-1x fa-inverse"></i>
		            	</span>
	           		 </a>
				</li>
				<li> <a href="https://twitter.com/Ukiyo-resto" target="_blank">
						<span class="fa-stack fa-lg">
		             	<i class="fa fa-circle fa-stack-2x"></i>
		            	<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
		            	</span>
				 	</a>
				</li>
				<li> <a href="https://www.facebook.com/Ukiyo-resto" target="_blank"> 
						<span class="fa-stack fa-lg">
		             	<i class="fa fa-circle fa-stack-2x"></i>
		             	<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
		            	</span>
					</a>
				</li>
				<li> <a href="https://www.instagram.com/Ukiyo-resto/" target="_blank">
						<span class="fa-stack fa-lg">
		              	<i class="fa fa-circle fa-stack-2x"></i>
		              	<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
		            	</span>
	            	</a>
				</li>
	      	</ul>
	    </div>
	</div>

	<!-- Contact Form -->
	<form>
		<div class="form-row">
			<div class="col">
	      		<input type="text" class="form-control" placeholder="First name">
	    	</div>
	    	<div class="col">
	      		<input type="text" class="form-control" placeholder="Last name">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
	      		<input type="text" class="form-control" placeholder="Email @">
			</div>
			<div class="col">
	      		<input type="text" class="form-control" placeholder="Phone number">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col-3">
	    		<input class="form-control" type="date" value="2018-05-28" id="example-date-input">
	  		</div>
	  		<div class="col-9">	
				<select class="custom-select" id="ReasonOfContact">
					<option selected>Choose...</option>
					<option value="1">Reservation</option>
					<option value="2">Workshop</option>
					<option value="3">Cultural activities</option>
					<option value="4">Other</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
	      		<input type="text" class="form-control" placeholder="Write your message">
			</div>
		</div>
		<br>
		<button id="button" type="submit" class="btn btn-light btn-lg"><i class="fab fa-stack fa-telegram-plane"></i></button>
	</form>
</div>

</div>
</body>

<footer>Powered by Charlotte Tusset
</footer>
