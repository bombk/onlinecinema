<?php
return $conn= mysqli_connect('localhost','root','root','onlinecinema');

if(!$conn){
	die("Connetion failed: ".mysqli_connect_error());	
}
