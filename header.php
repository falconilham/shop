<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="main.js"></script>
	<title>Shop Of Gamer</title>
</head>
<body>
	<div class="container-fluid">
		<div class="navbar-main">
			<div class="navbar-collapse">
				<a class="navbar-brand" href="index.php">
					<img src="mpgames.png">
				</a>
				<div class="navbar-menu">
					<form class="search" action="cari.php" method="post">
						<input type="text" placeholder="Search.." name="search">
      					<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div class="dropdown">
						<button class="dropbtn">Console</button>
							<div class="dropdown-content">
						  		<a href="#">Playstation</a>
						  		<a href="#">Xbox</a>
						  		<a href="#">Nintendo</a>
							</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Games</button>
							<div class="dropdown-content">
						  		<a href="#">Adventure</a>
						  		<a href="#">Sport</a>
						  		<a href="#">Racing</a>
							</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Rent</button>
							<div class="dropdown-content">
						  		<a href="#">Check Our Area</a>
						  		<a href="#">List Rent Game</a>
							</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Trade</button>
							<div class="dropdown-content">
						  		<a href="#">Newest</a>
						  		<a href="#">Location</a>
							</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Profile</button>
							<div class="dropdown-content">
						  		<a href="#">Preference</a>
						  		<a href="#">Log Out</a>
						  	</div>
					</div>
				</div>
			</div>	
		</div>
		
