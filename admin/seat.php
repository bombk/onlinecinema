<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Choose Seat</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rajdhani:400,500,700|Roboto+Slab:400,700" rel="stylesheet">
	<link media="all" rel="stylesheet" href="../css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="../js/jquery-3.2.1.min.js" defer><\/script>')</script>
	<script src="../js/jquery.main.js" defer></script>
	<script src="../js/custom.js" defer></script>
</head>
<body id="buy">
	<div id="wrapper">
		<!-- <header id="header">
			<nav id="nav">
				<div class="container">
					<div class="nav-holder">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="BOM"></a>
						</div>
						<ul class="navbar-right">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="#">Now Showing</a></li>
							<li><a href="#">Upcoming</a></li>
							<li>
								<span class="login-opener">Login</span>
								<div class="login-block">
									<form action="#" class="login-form">
										<input type="text" placeholder="Username"/>
										<input type="password" placeholder="Password"/>
										<input type="submit" value="Log In"/>
									</form>
									<p>Not a member yet? <span class="block-toggle">Click Here!</span> to Sign Up.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header> -->
		<main id="main">
			<div class="container">
				<h1>Seat Status</h1>
				<form action="" method="POST">
				<div class="seat-block">
					<ul class="status-info">
						<li>Vacant</li>
						<li>Selected</li>
						<li>Reserved</li>
					</ul>
				</div>
				</form>
				<ul class="seat-structure">
					<li>
						<ul class="row">
							<li>
								<strong>F01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>F02</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F03</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F04</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F05</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F06</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F07</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F08</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F09</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>F10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li>
								<strong>E01</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E02</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E03</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E04</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E05</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E06</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E07</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E08</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E09</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E10</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E11</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>E12</strong>				
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li class="reserved">
								<strong>D01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>D02</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D03</strong>			
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D04</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D05</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D06</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D07</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D08</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D09</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D10</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D11</strong>				
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>D12</strong>				
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li>
								<strong>C01</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C02</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C03</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C04</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C05</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C06</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C07</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C08</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C09</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>C10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li>
								<strong>B01</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B02</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B03</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B04</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B05</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B06</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B07</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B08</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B09</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>B10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li>
								<strong>A01</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A02</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A03</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A04</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A05</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A06</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A07</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A08</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A09</strong>
								<span class="icon-chair"></span>
							</li>
							<li>
								<strong>A10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
				</ul>				
			</div>		
		</main>
		<footer id="footer">
			<div class="container">
				<div class="copyright">
					<span>Copyright &copy; 2018 Unknown-Cinemas. All Rights Reserved.</span>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>