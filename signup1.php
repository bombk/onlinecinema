<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>College</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Rajdhani:400,500,700|Roboto+Slab:400,700" rel="stylesheet">
	<link media="all" rel="stylesheet" href="css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js" defer><\/script>')</script>
	<script src="js/jquery.main.js" defer></script>
</head>
<body class="register">
			<script>
				function myfun(){
					var a=document.getElementById("pass").value;
					var b=document.getElementById("cpass").value;
					
						if(a!=b){
							document.getElementById("message").innerHTML="**Password not matching!";
							return false;
						}
				}

			</script>


	<div id="wrapper">
		<div class="sign-wrap">
			<div class="signup">
				<h2>Create Account</h2>
					<form onsubmit="return myfun()" action="include/signUp.php" class="signup-form" method="POST">
					<input type="text" name="userName" placeholder="Username" required>
					<input type="email" name="email" placeholder="Email Address" required>
					<input type="number" name="mobileNo" placeholder="Mobile Number" required>
					<input type="password" id="pass" name="password" placeholder="Password" required>
					<input type="password" id="cpass" name="conformPassword" placeholder="Confirm Password" required>
					<input type="submit" value="Sign Up" style="color:red">
					<span id="message" style="color:red"></span>
				</form>
				<p>By clicking the Sign Up button, you have agreed to our <a href="#" style="color:red">Terms &amp; Conditions</a>.</p>
			</div>
		</div>
	</div>
</body>
</html>