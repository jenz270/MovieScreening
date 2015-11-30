<!DOCTYPE html>
<html>
<head>
	<title>Customer Profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
    include 'connectdb.php';
    ?>

	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>

	<br>
	<!-- Look at how to display the user's usernsme or name here -->
	<p> Welcome back, </p>
	<!-- Attempt to show the profile of the customer through php file to get the information of customer-->
	<p> Profile: </p>  	
	<p> Movies watched and rating:</p>

	<!-- Also list all the customer's other information -->

	<footer>
		 &copy; Jieni and Jaisen
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</html>
