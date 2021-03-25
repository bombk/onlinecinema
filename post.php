<?php
session_start();
?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rajdhani:400,500,700|Roboto+Slab:400,700" rel="stylesheet">
	<link media="all" rel="stylesheet" href="admin/css/post.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js" defer><\/script>')</script>
	<script src="js/jquery.main.js" defer></script>
</head>
<body>
	
	<div id="header">
		<div class="logo"><a href="post.php"><h2>Online Cinema Admin Panel</h2></a>
		
		</div>
						
	
	</div> 
	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="#">Dashboard</a></li>
				<li><a href="admin/backgroundImages.php">Add New Background Cinema</a></li>
				<li><a href="admin/add.php">Add new Cinema</a></li>
				<li><a href="admin/upcoming.php">Add New Up Coming Movie</a></li>
				<li><a href="admin/update.php">Update Cinema</a></li>
				<li><a href="admin/delete.php">Delete Cinema</a></li>
				<li><a href="admin/ticket.php">Tickets Status</a></li>
				<li><a href="admin/seat.php">Seat Details</a></li>
				
				
			</ul>
		
		</div>
		<div class="content">
		<h1>Dashboard</h1>
		<p>Here you can do stuff</p>
		<div id="box">
			<div class="box-top"><h2>Add Now Showing Movie Details</h2></div>
			<div class="box-panel">Admin can add new now showing movie details.You must have to fillup form correctly.To add new movie <a href="admin/add.php"><u><b>click here</b></u></a></div>
			<div class="box-top"><h2>Add Upcoming Movie Details</h2></div>
			<div class="box-panel">Admin can add Upcoming movie details.You must have to fillup form correctly.To add details <a href="admin/upcoming.php"><u><b>click here</b></u></a></div>
			<div class="box-top"><h2>Update Movie Details</h2></div>
			<div class="box-panel">Admin can Update movie details.You must have to fillup form correctly.To update movie details <a href="admin/update.php"><u><b>click here</b></u></a></div>
			<div class="box-top"><h2>Delete Movie Details</h2></div>
			<div class="box-panel">Admin can deletes movie details.You must have to choose correct movie Id.To delete movie details <a href="admin/delete.php"><u><b>click here</b></u></a></div>
			<div class="box-top"><h2>Tickets Status</h2></div>
			<div class="box-panel">Admin can see ticket status.To see ticket status <a href="admin/ticket.php"><u><b>click here</b></u></a></div>
			<div class="box-top"><h2>Seats Status</h2></div>
			<div class="box-panel">Admin can see seats details.To see seats details <a href="admin/seat.php"><u><b>click here</b></u></a></div>
		
		</div>
		
		
		</div>
		
	
	
	</div>

	
			
</body>
</html>