<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel PALAZZO</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
	<br>
	<br>
	<br>
	<br>
    <body style = "background-image: url('images/bcg.png'); "></body>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
		<div class="navbar-header">
		<a href="index2.html" class="navbar-brand">Hotel PALAZZO</a>
		</div>
		<nav class="collapse-navbar" role="navigation">
		<ul class="nav navbar-nav navbar-right">
		<li><a href = "index2.html">Home</a></li> 
		<li><a href = "aboutus.html">About Us</a></li> 
		<li><a href = "gallery.html">Gallery</a></li>
		<li><a href = "dineandlounge2.html">Dine and Lounge</a></li> 			
		<li class="active"><a href = "reservation.php">Reservation</a></li> 
		<li><a href = "rulesandregulation2.html">Rules and Regulation</a></li>
        <li class="active">
          <a href="contactus2.html">Contact</a>
		</li>
		<li style="margin-right: -80px; margin-left: 45px;border:0.5px  solid black;border-radius: 8px; font-size: 13px; font-weight: 600;"> <a href="admin/index.php"><img src="images/user-solid.png" />  Admin</a></li>
      </ul>
		</nav>
  </div>
</header>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li class = "active"><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Change Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
				    <form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
						<div class = "form-group">
							<label>Name </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['name']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<br>
	<br>
	<br>
	<br>
<footer>
	<div style = "text-align:right; " class = "footer">
		<label style="color:white;  margin: 12px; margin-right: 20px; ">&copy; Copyright: DEFSA </label>
	</div>
	</footer>
	
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>
