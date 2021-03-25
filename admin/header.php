<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rajdhani:400,500,700|Roboto+Slab:400,700" rel="stylesheet">
	<link media="all" rel="stylesheet" href="css/post.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js" defer><\/script>')</script>
	<script src="js/jquery.main.js" defer></script>
</head>
<body>
	
	<div id="header">
		<div class="logo"><a href="../post.php"><h2>Online Cinema Admin Panel</h2></a></div>
	
	</div> 
	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="../post.php">Dashboard</a></li>
				<li><a href="backgroundImages.php">Add New Background Cinema</a></li>
				<li><a href="add.php">Add New Cinema</a></li>
				<li><a href="upcoming.php">Add New Up Coming Movie</a></li>
				<li><a href="update.php">Update Cinema</a></li>
				<li><a href="delete.php">Delete Cinema</a></li>
				<li><a href="ticket.php">Tickets Status</a></li>
				<li><a href="seat.php">Seat Details</a></li>
				
				
			</ul>
		
		</div>
		