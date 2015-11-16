<!DOCTYPE html>
<html>
<head>
	<title>Customer Profile</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- add php to link the database -->
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>

	<nr>
	<!-- Look at how to display the user's usernsme or name here -->
	<p> Welcome back, </p>
	<!-- Attempt to show the profile of the customer through php file to get the information of customer-->
	<p> Profile: </p>  	
	<p> Movies watched and rating:</p>

	<!-- Also list all the customer's other information -->

	<footer> 
		<p> Copyright Jieni and Jaisen CS3319 </p>
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</head>
