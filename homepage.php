<?php
session_start();
include "include/dbh.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Cinema and Tickets Booking</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rajdhani:400,500,700|Roboto+Slab:400,700" rel="stylesheet">
	<link media="all" rel="stylesheet" href="css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js" defer><\/script>')</script>
	<script src="js/jquery.main.js" defer></script>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="nav">
				<div class="container">
					<div class="nav-holder">
						<div class="logo">
							<a href="homepage.php"><img src="images/logo.png" alt="BOM"></a>
						</div>
						<ul class="navbar-right">
							<li class="active"><a href="homepage.php">Home</a></li>
							<li><a href="#now-showing">Now Showing</a></li>
							<li><a href="#upcoming">Upcoming</a></li>
							<li>
								<?php
										if(isset($_SESSION['userName'])){
											echo $_SESSION['userName'];
										}
									?>
							</li>
							<li><a href="index.php">Logout</a></li>
						</ul>
						<div class="nav-opener">
							<span class="burger-menu"></span>
							<span class="burger-menu"></span>
							<span class="burger-menu"></span>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<main id="main">
			<div class="banner-carousel">
				<!-- slick gallery structure example -->
				<div class="slick-slider">
					<div class="slick-items">
						
								<?php
									$sql="SELECT * from backgrounddetails WHERE movieId=1";
									$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='img-holder comming-soon'  style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='container'>";
											echo "<div class='item-info'>";
											
											echo "<h1>".$row['movieName']."</h1>";
										
											$_SESSION['movieName6']=$row['movieName'];
											}
										
											echo "<ul class='item-buy'>";
											echo "<li><span class='icon-play'></span><a href='pages/xmen.html'><span>More Info</span></a></li>";
											echo "<li><span class='icon-ticket'></span><a href='seat/seat6.php'><span>Buy Tickets</span></a></li>";
											echo "</ul>";
											echo "<ul class='movie-genre'>";
											echo "<li><a href='#'>Action</a></li>";
											echo "<li><a href='#'>Adventure</a></li>";
											echo "<li><a href='#'>Sci-Fi</a></li>";
											echo "</ul>";
								?>	
								
								</div>
							</div>
						</div>
					</div>
					<div class="slick-items">
						
								
								<?php
										$sql="SELECT * from backgrounddetails WHERE movieId=2";
										$result=$conn->query($sql);
											while($row=mysqli_fetch_array($result)){
											echo "<div class='img-holder comming-soon'  style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='container'>";
											echo "<div class='item-info'>";
												echo "<h1>".$row['movieName']."</h1>";
										
												$_SESSION['movieName7']=$row['movieName'];
												}
										
												echo "<ul class='item-buy'>";
												echo "<li><span class='icon-play'></span><a href='pages/xmen.html'><span>More Info</span></a></li>";
												echo "<li><span class='icon-ticket'></span><a href='seat/seat7.php'><span>Buy Tickets</span></a></li>";
												echo "</ul>";
												echo "<ul class='movie-genre'>";
												echo "<li><a href='#'>Horror</a></li>";
												echo "<li><a href='#'>Mystery</a></li>";
												echo "<li><a href='#'>Fantasy</a></li>";
												echo "</ul>";
								?>	
								</div>
							</div>
						</div>
					</div>
					<div class="slick-items">
						
								
									<?php
										$sql="SELECT * from backgrounddetails WHERE movieId=3";
										$result=$conn->query($sql);
											while($row=mysqli_fetch_array($result)){
												echo "<div class='img-holder comming-soon'  style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='container'>";
											echo "<div class='item-info'>";
												echo "<h1>".$row['movieName']."</h1>";
										
												$_SESSION['movieName8']=$row['movieName'];
											}
										
												echo "<ul class='item-buy'>";
												echo "<li><span class='icon-play'></span><a href='pages/xmen.html'><span>More Info</span></a></li>";
												echo "<li><span class='icon-ticket'></span><a href='seat/seat8.php'><span>Buy Tickets</span></a></li>";
												echo "</ul>";
												echo "<ul class='movie-genre'>";
												echo "<li><a href='#'>Comedy</a></li>";
												echo "<li><a href='#'>Nepali</a></li>";
												echo "</ul>";
									?>	
									
								</div>
							</div>
						</div>
					</div>
					<div class="slick-items">
						
								<?php
										$sql="SELECT * from backgrounddetails WHERE movieId=4";
										$result=$conn->query($sql);
											while($row=mysqli_fetch_array($result)){
												echo "<div class='img-holder comming-soon'  style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='container'>";
											echo "<div class='item-info'>";
												echo "<h1>".$row['movieName']."</h1>";
												
												$_SESSION['movieName9']=$row['movieName'];
												}
										
												echo "<ul class='item-buy'>";
												echo "<li><span class='icon-play'></span><a href='pages/xmen.html'><span>More Info</span></a></li>";
												echo "<li><span class='icon-ticket'></span><a href='seat/seat9.php'><span>Buy Tickets</span></a></li>";
												echo "</ul>";
												echo "<ul class='movie-genre'>";
												echo "<li><a href='#'>Bollywood</a></li>";
												echo "<li><a href='#'>History</a></li>";
												echo "<li><a href='#'>Adventure</a></li>";
												echo "</ul>";
								?>	
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-wrap">
				<div class="container">
					<div id="now-showing" class="common-carousel">
						<div class="header-wrap">
							<span>Shows Today</span>
						</div>
						<!-- slick gallery structure example -->
						<div class="carousel-wrap">
								<?php
										
									$sql="SELECT * from movies WHERE movieId=1";
									$result=$conn->query($sql);
									while($row=mysqli_fetch_array($result)){
										
										echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
										echo "<div class='item-wrap'>";
										echo "<div class='carousel-item'>";
										echo "<h3>".$row['movieName']."</h3>";
										echo "<dl>";
										echo "<dt>ShowTime :</dt>";			
										echo "<dd>".$row['showTime']."</dd>";
										$_SESSION['movieName1']=$row['movieName'];
										}
										
							?>	
										</dl>
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/loot.html"><span>More Info</span></a></li>
											<li><span class="icon-ticket"></span><a href="seat/seat1.php"><span>Buy Tickets</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php

										$sql="SELECT * from movies WHERE movieId=2";
										$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											echo "<h3>".$row['movieName']."</h3>";
											echo "<dl>";
											echo "<dt>ShowTime :</dt>";			
											echo "<dd>".$row['showTime']."</dd>";
											$_SESSION['movieName2']=$row['movieName'];
												}
											
									?>
										
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/bahubali-2.html"><span>More Info</span></a></li>
											<li><span class="icon-ticket"></span><a href="seat/seat2.php"><span>Buy Tickets</span></a></li>
										</ul>
									</div>
								</div>
							</div>
								<?php
										$sql="SELECT * from movies WHERE movieId=3";
										$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											echo "<h3>".$row['movieName']."</h3>";
											echo "<dl>";
											echo "<dt>ShowTime :</dt>";			
											echo "<dd>".$row['showTime']."</dd>";	
											
											$_SESSION['movieName3']=$row['movieName'];
											}
											
									?>
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/sanju.html"><span>More Info</span></a></li>
											<li><span class="icon-ticket"></span><a href="seat/seat3.php"><span>Buy Tickets</span></a></li>
										</ul>
									</div>
								</div>
							</div>
								<?php
									$sql="SELECT * from movies WHERE movieId=4";
									$result=$conn->query($sql);
									while($row=mysqli_fetch_array($result)){
										
										echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
										echo "<div class='item-wrap'>";
										echo "<div class='carousel-item'>";
										
										echo "<h3>".$row['movieName']."</h3>";
										echo "<dl>";
										echo "<dt>ShowTime :</dt>";			
										echo "<dd>".$row['showTime']."</dd>";						
										
										$_SESSION['movieName4']=$row['movieName'];
										}
										
								?>
							
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/jumanji-2.html"><span>More Info</span></a></li>
											<li><span class="icon-ticket"></span><a href="seat/seat4.php"><span>Buy Tickets</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
											$sql="SELECT * from movies WHERE movieId=5";
											$result=$conn->query($sql);
											while($row=mysqli_fetch_array($result)){
												echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
												echo "<div class='item-wrap'>";
												echo "<div class='carousel-item'>";
												echo "<h3>".$row['movieName']."</h3>";
												echo "<dl>";
												echo "<dt>ShowTime :</dt>";			
												echo "<dd>".$row['showTime']."</dd>";		
												
												$_SESSION['movieName5']=$row['movieName'];
												}
												
											?>				
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/up.html"><span>More Info</span></a></li>
											<li><span class="icon-ticket"></span><a href="seat/seat5.php"><span>Buy Tickets</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="upcoming" class="common-carousel">
						<div class="header-wrap">
							<span>Upcoming</span>
						</div>
						<!-- slick gallery structure example -->
						<div class="carousel-wrap">
								<?php
										$sql="SELECT * from upcomingmovie WHERE movieId=1";
										$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											
											echo "<h3>".$row['movieName']."</h3>";
													}
								?>
											
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/paltan.html"><span>More Info</span></a></li>
											<!-- <li><span class="icon-ticket"></span><a href="seat.php"><span>Buy Tickets</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
								<?php
									$sql="SELECT * from upcomingmovie WHERE movieId=2";
									$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											
											echo "<h3>".$row['movieName']."</h3>";
													}
								?>
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/nun.html"><span>More Info</span></a></li>
											<!-- <li><span class="icon-ticket"></span><a href="seat.php"><span>Buy Tickets</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
								<?php
										$sql="SELECT * from upcomingmovie WHERE movieId=3";
										$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											echo "<h3>".$row['movieName']."</h3>";
													}
								?>
										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/predator.html"><span>More Info</span></a></li>
											<!-- 		<li><span class="icon-ticket"></span><a href="seat.php"><span>Buy Tickets</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<?php
										$sql="SELECT * from upcomingmovie WHERE movieId=4";
										$result=$conn->query($sql);
										while($row=mysqli_fetch_array($result)){
											echo "<div class='carousel-content' style='background-image: url(\"admin/".$row['poster']."\");'>";
											echo "<div class='item-wrap'>";
											echo "<div class='carousel-item'>";
											
											echo "<h3>".$row['movieName']."</h3>";
													}
								?>

										<ul class="item-buy">
											<li><span class="icon-play"></span><a href="pages/venom.html"><span>More Info</span></a></li>
											<!-- 		<li><span class="icon-ticket"></span><a href="seat.php"><span>Buy Tickets</span></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="about-us">
						<div class="text-wrap">
							<h2>
								<span>About Us</span>
							</h2>
							<p><strong>Unknown Cinemas</strong> is a cinema hall in kathmandu, Nepal founded by Ashis Bhatta, Biraz Baral and Moulik Rai. It features Nepali movies as well as Bollywood and Hollywood movies.</p>
						</div>
						<div class="carousel-holder">
							<div class="img-holder" style="background-image: url(images/about01.jpg);"></div>
							<div class="img-holder" style="background-image: url(images/about02.jpg);"></div>
							<div class="img-holder" style="background-image: url(images/about03.jpg);"></div>
						</div>
					</div>
					<div class="contact-us">
						<div class="map-wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.048033857043!2d85.34487602739743!3d27.716544731152478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19700a1bd0c7%3A0x64dcde54eb011c10!2sChandra+Vinayak+(Chabahil+Ganeshthan)!5e0!3m2!1sen!2snp!4v1534950706490"  height="450" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="text-wrap">
							<h2>
								<span>Location</span>
							</h2>
							<p>
								<strong>Unknown Cinemas </strong>is located in Chandra Vinayak, Kathmandu behind the Red mug Cafe. It is 3 store-yard building with a big banner in Top of the house.
							</p>
							<dl>
								<dt>Address :</dt>
								<dd>Chandra Vinayak, Ganesthan</dd>
							</dl>
							<dl>
								<dt>Contact number :</dt>
								<dd><a href="tel:+9779842129999">+977-9842129999</a></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer id="footer">
			<div class="container">
				<div class="copyright">
					<span>Copyright &copy;2018 Unknown-Cinemas. All Rights Reserved.</span>
				</div>
			</div>
		</footer>
		
	<script src="js/custom.js" defer></script>
</body>
</html>