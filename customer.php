<!DOCTYPE html>
<html>
<head>
	<title>Screenings Customer</title>
	<meta charset="utf-8">
</head>
<body>
	 <?php
    include 'connectdb.php';
    ?>
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>

	<nr>
	<!-- Look at how to display the user's usernsme or name here -->
	<p> Welcome back, </p>
	<!-- Try and view profile by redirecting to profile.php? -->
	<p><a href="profile.php"> View Profile </a></p>  

	<!-- Look at how to display the user's recently watched movie-->
	<p> This is the current showing that you had just seen: </p>

	<form>
	<p> Give a rating to the movie: </p>
	<input type="radio" name="rating" value="one">1<br>
	<input type="radio" name="rating" value="two">2<br>
	<input type="radio" name="rating" value="three">3<br>
	<input type="radio" name="rating" value="four">4<br>
	<input type="radio" name="rating" value="five">5<br>
	<input type="submit" value="Submit">
	</form>
	<br>
	<!-- Look at how to display the user's recently watched movie-->
	<!-- genre -->
	<p> This is the current showing that you had just seen: </p>
	<p> Showings: </p>
	<p> Genre </p>	<!-- let the user select from the multiple genres within the data base. Give a warning 					if there are no seats left for the showing --> 
	<p> Date </p>	<!-- Search for date entered, make sure to change into certain format. -->
					<!-- Also remmember prompt warning when there is no seats left -->
	<p> Theatre </p> <!-- based on theatres that still have seats left -->
	<p> Movie Title </p> <!-- Let the user type in input -->
	<br>

	<br>
	<footer> 
		<p> Copyright Jieni and Jaisen CS3319 </p>
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</html>