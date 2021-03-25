<?php
session_start();
include 'dbh.php';


$userName=$_POST['userName'];
$password=$_POST['password'];

$sql = "SELECT * FROM login WHERE userName='$userName'";
$result =$conn->query($sql);
$row=$result->fetch_assoc();
$hash_password=$row['password'];
$hash=password_verify($password,$hash_password);

	if($hash == 0){	
			echo "Oops!!!Your User name or password is incorrect!";
		}
		
		elseif($userName==admin){
			$sql ="SELECT * FROM login WHERE userName='admin' AND password='$hash_password'";
		$result =$conn->query($sql);

			if(!$row = $result->fetch_assoc()){
				echo "Oops!!!Your User name or password is incorrect!";	
				}
		
			else{
				$_SESSION['userName']=$row['userName'];
				}
				header("Location: ../post.php");
		}
		
	else{
		
		$sql ="SELECT * FROM login WHERE userName='$userName' AND password='$hash_password'";
		$result =$conn->query($sql);

			if(!$row = $result->fetch_assoc()){
				echo "Oops!!!Your User name or password is incorrect!";	
				}
		
			else{
				$_SESSION['userName']=$row['userName'];
				}
				header("Location: ../homepage.php");
		}


