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
		<h1>Update Movie Details</h1>
		<p>Here you can do stuff</p>
		<div id="box">
			<div class="box-top"><h2>Update Movie</h2></div>
			<div class="box-panel">

				<form action="update.php" method="POST" enctype="multipart/form-data">
				<h1>You must have to select correct movie id to update particular movie details!!!</h1>
					<table class="table">
						<tr>
							<td>Movie Id:</td>
							<td><select onchange="change_time(this.value)" name="movieId" style="color:black">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									  </select>
							</td>
						</tr>
						<tr>
							<td>Name of Movie:</td>
							<td><input type="text" name="movieName" required></td>
						</tr>
						<tr>
							<td>Genre:</td>
							<td><input type="text" name="genre" required></td>
						</tr>
						<tr>
							<td>Cast:</td>
							<td><input type="text" name="cast" required></td>
						</tr>
						<tr>
							<td>Show Time:</td>
							<td><input type="text" name="showTime" required></td>
						</tr>
						<tr>
							<td>Poster:</td>
							<td><input type="file" name="poster" required></td>
						</tr>
						<tr>
							<td>Movie Details:</td>
							<td><textarea name="movieDetails" cols="43" rows="6" placeholder="Enter Movie Details." required></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit1" value="Update"></td>
						</tr>
					
					</table>
				</form>
				
<?php
	
	//if upload button is pressed

	if(isset($_POST["submit1"]))
	{
		$poster="images/".basename($_FILES['poster']['name']);
		move_uploaded_file($_FILES["poster"]["tmp_name"],$poster);
		
		$movieId=$_POST['movieId'];
		$movieName=$_POST['movieName'];
		$genre=$_POST['genre'];
		$cast=$_POST['cast'];
		$showTime=$_POST['showTime'];
		$movieDetails=$_POST['movieDetails'];
		
		$sql="UPDATE `movies` SET `movieName`='$movieName',`genre`='$genre',`cast`='$cast',`showTime`='$showTime',`poster`='$poster',`movieDetails`='$movieDetails' WHERE movieId='$movieId'";
		
		if($result =$conn->query($sql)){
			echo "Movie updated sucessfully.";
		}else
		{
			echo "Movie update is failed!.";
		}
	}


?>
			
			
			</div>
			
		</div>
	</div>


</body>
</html>