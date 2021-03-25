<html>
<head>
<title>ticket</title>
<?php
include "header.php";
include "../include/dbh.php";

?>
</head>
<body>
<div class="content">
		<h1>Tickets Details</h1>
		<p>Here you can do stuff</p>
		<div id="box">
			<div class="box-top"><h2>Ticket Details</h2></div>
			<div class="box-panel">
			
				<table align="center" border="1px" style="width:900px; line-height:30px; font-size:20px;">
					<tr>
						<th>Ticket Number</th>
						<th>Movie Name</th>
						<th>Number of ticket</th>
						<th>Seat Number</th>
						<th>Price</th>
						<th>Show Time</th>
						<th>Date</th>
						<th>Mobile No.</th>
					</tr>
				<?php
				$sql="SELECT * from seats";
				$result=$conn->query($sql);
				
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						
						

						echo "<tr><td>".$row["ticketNumber"]."</td><td>".$row["movieName"]."</td><td>".$row["NoOfTicket"]."</td><td>".$row["seatNo"]."</td><td>".$row["amount"]."</td><td>".$row["date"]."</td><td>".$row["showTime"]."</td><td>".$row['mobileNo']."</td></tr>";
					

					}
					echo "</table>";
					
				}
				else{
					echo "0 result";
				}
				
				?>
				</table>
			</div>
		</div>
		</div>
</body>
</html>