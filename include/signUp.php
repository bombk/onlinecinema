<?php
session_start();
include 'dbh.php';

$userName=$_POST['userName'];
$email=$_POST['email'];
$mobileNo=$_POST['mobileNo'];
$password=$_POST['password'];

$encrypted_password=password_hash($password,PASSWORD_DEFAULT);

$sql ="INSERT INTO login (userName,email,mobileNo,password) 
VALUES ('$userName','$email','$mobileNo','$encrypted_password')";

$result =$conn->query($sql);

header("Location: ../index.php");
