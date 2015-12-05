<!--Used to let the customer update the rating a movie they have seen-->
<!DOCTYPE html>
<html>
<head>
	<title>Screenings Customer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>
	
	<hr>
	<br>
	<?php
	include 'connectdb.php';
	$customerName = $_POST["customerList"];
	$movieName = $_POST["movieList"];
	$rate = $_POST["rating"];
	if(isset($_POST['rating']) and ($_POST["customerList"] != " ") and ($_POST["movieList"] != " ")){
		$query = "update selected join customer on customer.custID=selected.custID join showing on selected.showID = showing.showID join movie on showing.movieID = movie.movieID set rate ='".$rate. "' where movie.movieID ='" .$movieName. "' and  selected.custID = '".$customerName. "'";
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("Failed to retreive Customer Information");
		}
		if (mysqli_query($connection, $query)) {
			echo "Updated Successfully";
		} else {
			echo "Failed to update for Customer ";
		}
	}
	else{
		echo "<h3>" . "Please make sure to fill out all fields! Click the button below and make sure to fill all information." . "</h3>";
	}
	mysqli_close($connection);
	?>

	<hr>
	<form action="customer.php">
		<input type="submit" value="Back to Customer Profile">
	</form>
	<hr>
	<footer>
		&copy; Jieni and Jaisen
	</footer>
</body>
</html>


