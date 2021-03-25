<?php
session_start();
include "../include/dbh.php";
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
	<script src="../js/seat.js" defer></script>
	
	<style>
	input[type = "text"] {
		max-width: 100%;
		width: 500px !important;
		color: #fff;
			background: transparent;
		padding: 0 10px !important;
		border: none;
		
	}
	
	.seat-block {
		width: 100% !important;
	}
	
	.seat-number {
		max-width: 100%;
	}
	
	.seat-detail {
		width: 100% !important;
	}
	
	.seat-detail div {
		display: flex;
		flex-wrap: wrap;
	}
	</style>
</head>
<body id="buy">
	<div id="wrapper">
		<main id="main">
			<div class="container">
				<h1>Seat Selection</h1>
				<form action="../include/seatBook6.php" method="POST">
				<div class="seat-block">
					<div class="seat-detail">						
						<div class="ticket-title">
						<span>Movie Name: </span><input type="text" value='<?php
							if(isset($_SESSION['movieName6'])){
									echo $_SESSION['movieName6'];
								}
							?>' name="movieName">
						 </div>
						 <div class="ticket-holder">						
							<span>Total Seat : </span><input type="text" value="0" class="ticket-quantity" name="NoOfTicket">
						</div>
						<div class="seat-holder">
							<span>Seat Name : </span><input type="text" value="" class="seat-number" name="seatNo">
						</div>
						<div class="price-holder">
							<span>Amount : Rs. </span><input type="text" value="0" class="seat-price" name="amount">
						</div>
						
						<div class="">
						Show Time: <select id="time" onchange="change_time(this.value)" class="#" name="showTime" style="color:black">
									<option value="10AM">10AM</option>
									<option value="2PM">2PM</option>
									<option value="6PM">6PM</option>
									  </select>
					 </div>
					 <div class="">
						Date: <select id="Date" onchange="change_date(this.value)" class="#" name="date" style="color:black">
									<option value="2075-8-9">2075-8-9</option>
									<option value="2075-8-10">2075-8-10</option>
									<option value="2075-8-11">2075-8-11</option>
							  </select>
					 </div>	
						<div class="">Mobile No: <input type="number" name="mobileNo" style="color:black" required></div>						 
					<div class="">
						<span>Payment method: <a href="https://esewa.com.np/#/home"><u><b>eSewa</b></u></a> </span><span class="payement" name="payment"></span>
					</div>
						
						<button type="submit" class="btn-book">Book Ticket</button>
					</div>
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
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F01'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>"> 
								<strong>F01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>F02</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F03</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F04</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F05'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F05</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F06'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F06</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F07'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F07</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F08'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F08</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F09'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F09</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'F10'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>F10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li class="reserved">
								<strong>E01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>E02</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E03</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E04</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E05'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E05</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E06'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E06</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E07'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E07</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E08'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E08</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E09'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E09</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'E10'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>E10</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>E11</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
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
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D03</strong>			
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D04</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D05'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D05</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D06'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D06</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D07'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D07</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D08'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D08</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>D09</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>D10</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D11'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D11</strong>				
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'D12'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>D12</strong>				
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C01'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C02'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C02</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C03</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C04</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C05'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C05</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C06'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C06</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>C07</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>C08</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C09'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C09</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'C10'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>C10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B01'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B02'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B02</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B03</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B04</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B05'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B05</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B06'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B06</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B07'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B07</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B08'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B08</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B09'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B09</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'B10'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>B10</strong>
								<span class="icon-chair"></span>
							</li>
						</ul>
					</li>
					<li>
						<ul class="row">
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A01'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A01</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A02'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A02</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A03'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A03</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A04'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A04</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>A05</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>A06</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="reserved">
								<strong>A07</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A08'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A08</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A09'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
								<strong>A09</strong>
								<span class="icon-chair"></span>
							</li>
							<li class="	<?php
								$sql="SELECT seat06 from chairtab WHERE seat06 = 'A10'";
								$result=$conn->query($sql);
								if($result->num_rows>0){
									echo "reserved";		
									}
								else{
									echo "not-reserved";
								}				
				?>">
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