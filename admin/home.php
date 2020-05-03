<!DOCTYPE html>
<?php
	require_once 'validate.php';
?>
<html lang = "en">
	<head>
		<title>Hotel PALAZZO</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
	<body style = "background-image: url('../images/bc2.png'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
		<div class="navbar-header">
		<a href="./" class="navbar-brand">Hotel PALAZZO</a>
		</div>
			<ul class = "nav navbar-nav pull-right ">
			<li class = "active"><a href = "home.php">Home</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>			
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> Administrator</a>
					<ul class="dropdown-menu">
						<li ><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	</header>

			
				<div class = "panel-body">
					<center><img src = "../images/back.jpg" width="700px" heigh="600px" /></center>
				</div>
	<footer>
	<div style = "text-align:right; height: 30px; background-color: #003300;"  class = "navbar navbar-default navbar-fixed-bottom">
		<label style="color:white;  margin: 12px; margin-right: 20px; ">&copy; Copyright: DEFSA </label>
	</div>
	</footer>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>