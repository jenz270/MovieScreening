<!DOCTYPE html>
<html>
<head>
	<title>Screenings Management </title>
	<meta charset="utf-8">
</head>
<body>
	<!-- add php to link the database -->
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>

	<br>

	<h2> Selling Tickets: </h2>
	<p>Customers:</p>
	<form action= "getCustomers.php" method="post">
		<!-- add php to get the different customers into list -->
	</form>
	
	<p>Showing:</p>
	<form action= "getShowings.php" method="post">
		<!-- add php to get the different showings into list-->


	<input type="submit" value="Sell Ticket">
	</form>
	

	<!-- display using drop down box, format information to be displayed within a constrained box -->
	<!-- total ticket sales for genre -->
	<!-- total number of movies within the genre -->
	<p> Genre: </p> 
	<form action= "getGenre.php" method="post">
		<!-- genretotal.php-->
	</form>
	<br>
	
	<!-- you can just get the rating information through whichever table it is that contains the information -->
	<p> Ratings: </p> 
	<p> All movies with average rating of 4 or more stars </p>
	<form action= "getwhateverratingsiswithin.php" method="post">
	</form>
	<br>
	<footer> 
		<p> Copyright Jieni and Jaisen CS3319 </p>
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</html>