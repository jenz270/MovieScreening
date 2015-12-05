<!--  Calls methods to allow the customer to view various showing lists as well as their own profile  -->
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
	
	<hr>
	<div id="current">
    <h2 class="titles"> Customer Profile </h2>
    <ul>
      <li class="first">
    <h3> Give a rating to the movie that you've seen: </h3>
 		<?php
                include 'getCustList.php';
                include 'getMovieTitle.php';
        ?>
	 <form action="updateRating.php" method="post">
	<h3> Give a rating to the movie: </h3>
	<input type="radio" name="rating" value="one">1<br>
	<input type="radio" name="rating" value="two">2<br>
	<input type="radio" name="rating" value="three">3<br>
	<input type="radio" name="rating" value="four">4<br>
	<input type="radio" name="rating" value="five">5<br>
  <br><input type="submit" name ="submit" value="rating" />
	</form>
	</li>
  
  <li class="second">
	<h3> Genre </h3>	<!-- let the user select from the multiple genres within the data base. Give a warning if there are no seats left for the showing -->

	  <form action="getCustInfo.php" method="post">
        <?php
                include 'movieList.php';
        ?> 
	<h3> Date </h3>	<!-- Search for date entered, make sure to change into certain format. -->
					<!-- Also remmember prompt warning when there is no seats left -->
        <form action="getMovieListByDate.php" method="post">
       <h3> StartDate: </h3>
          <input type="date" name="startdate">
      <h3> EndDate: </h3>
          <input type="date" name="enddate" ><br>
          <input type="submit" value="Enter"/>
        </form>

        <h3> Theatre </h3> <!-- based on theatres that still have seats left -->
        <form action="getMovieListByTheatre.php" method="post">

        <input type="submit" value="Availability"/>
        </form>

        <h3> Movie Title </h3> <!-- Let the user type in input -->
        <form action="getMovieListByMovieTitle.php" method="post">
        <?php
        include 'getMovieTitle.php';
        ?>
        <input type="submit" value="By Title"/>
        </form>
	</div>
	<br>
</li>
</ul>
	<br>
    <hr>
         <form action="../index.php">
          <input type="submit" value="Logout">
         </form>
        <hr>
	<footer>
		&copy; Jieni and Jaisen
	</footer>
	<?php
		mysqli_close($connection);
	?>
</body>
</html>

