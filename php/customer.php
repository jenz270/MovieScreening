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
	 <?php
    include 'connectdb.php';
    ?>
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>

	<nr>
	<!-- Look at how to display the user's usernsme or name here -->
	<p> Welcome back, </p>

	<!-- Look at how to display the user's recently watched movie-->
	<p> This is the current showing that you had just seen: </p>

	 <form action="updateRating.php" method="post">
	<p> Give a rating to the movie: </p>
	<input type="radio" name="rating" value="one">1<br>
	<input type="radio" name="rating" value="two">2<br>
	<input type="radio" name="rating" value="three">3<br>
	<input type="radio" name="rating" value="four">4<br>
	<input type="radio" name="rating" value="five">5<br>
	 <?php

                include 'getCustList.php';
                include 'getMovieTitle.php';

        ?>

        <input type="submit" name ="submit" value="rating" />
	</form>
	<br>




	<!-- Look at how to display the user's recently watched movie-->
	<!-- genre -->
	<p> This is the current showing that you had just seen: </p>
	<p> Showings: </p>
	<p> Genre </p>	<!-- let the user select from the multiple genres within the data base. Give a warning if there are no seats left for the showing -->

	  <form action="getCustInfo.php" method="post">

        <?php
                include 'movieList.php';
        ?>

	 
	<p> Date </p>	<!-- Search for date entered, make sure to change into certain format. -->
					<!-- Also remmember prompt warning when there is no seats left -->


	     <form action="getMovieListByDate.php" method="post">
  StartDate:
          <input type="date" name="startdate">
  EndDate:
          <input type="date" name="enddate">
          <input type="submit" value="Enter">
          </form>


	<p> Theatre </p> <!-- based on theatres that still have seats left -->
	
	 <form action="getMovieListByTheatre.php" method="post">

        <input type="submit" value="Availability"/>
        </form>




	<p> Movie Title </p> <!-- Let the user type in input -->
	
	   <form action="getMovieListByMovieTitle.php" method="post">
        <?php
        include 'getMovieTitle.php';
        ?>
        <input type="submit" value="By Title"/>
        </form>



	<br>

	<br>
	<footer>
		&copy; Jieni and Jaisen
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</html>