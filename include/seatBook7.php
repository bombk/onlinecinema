<?php
session_start();
include 'dbh.php';

$movieName=$_POST['movieName'];
$NoOfTicket=$_POST['NoOfTicket'];
$seatNo=$_POST['seatNo'];
$amount=$_POST['amount'];
$showTime=$_POST['showTime'];
$date=$_POST['date'];
$mobileNo=$_POST['mobileNo'];

$sql ="INSERT INTO seats (movieName,NoOfTicket,seatNo,amount,showTime,date,mobileNo) 
VALUES ('$movieName','$NoOfTicket','$seatNo','$amount','$showTime','$date',$mobileNo)";

$arr1 = explode(',',$seatNo);

foreach ($arr1 as $item1) {
	$statement = "INSERT INTO chairtab (seat07) VALUES ('$item1')";
	$result=$conn->query($statement);
	$_SESSION['seatName']=$seatNo;
}

if($conn->query($sql)===TRUE){
	
	$sql="SELECT * from seats WHERE ticketNumber=insert_id";
	$result=$conn->query($sql);

	echo "<h3>Your Ticket</h3>";
	echo "Ticket id: ".$conn->insert_id."<br>";
	echo "Movie Name: ".$movieName."<br>";	
	echo "Total Seats: ".$NoOfTicket."<br>";
	echo "Seat Name: ".$seatNo."<br>";
	echo "Total amout: ".$amount."<br>";
	echo "show Time: ".$showTime."<br>";
	echo "Date: ".$date."<br>"."<br>";
	echo "<button type='submit' value='print'>Print Ticket</button>";
	}


else{		
	echo "not conneted";
}



$conn->close();


