<?php
include "header.php";
include "../include/dbh.php";
?>

<html>
<head>
<title>OnlineCinema</title>
<style type="text/css">
.table{
	font-size:25px;
}
.table input{
	font-size:25px;
	font-family:sans sarif;
}

</style>
</head>
<body>

<div class="content">
		<h1>Delete Movie Details</h1>
		<p>Here you can do stuff</p>
		<div id="box">
			<div class="box-top"><h2>Delete Movie</h2></div>
			<div class="box-panel">

				<form action="delete.php" method="POST" enctype="multipart/form-data">
				<h1>You must have to select correct movie id to delete particular movie details!!!</h1>
					<table class="table">
						<tr>
							<td>Select Movie Id:</td>
							<td><select onchange="change_time(this.value)" name="movieId" style="color:black">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
								<br><br>
							
						<tr><td><input type="submit" name="submit1" value="DELETE"></td>
						</tr>
					
					</table>
				</form>
				
<?php
	
	//if upload button is pressed

	if(isset($_POST["submit1"]))
	{	
		$movieId=$_POST['movieId'];
		$sql="DELETE FROM `movies` WHERE movieId='$movieId'";
		if($result =$conn->query($sql)){
			echo "Movie deletion is sucessfully.";
		}else
		{
			echo "Movie deletion is failed!.";
		}
	}


?>
			
			
			</div>
			
		</div>
	</div>


</body>
</html>