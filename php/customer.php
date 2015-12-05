<--  Calls methods to allow the customer to view various showing lists as well as their own profile  -->
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
        <!-- Try and view profile by redirecting to profile.php? -->
        <p> View Profile </p>

          <form action="getCustInfo.php" method="post">
 <?php
        include 'getCustList.php';
        ?>
        <input type="submit" value="Customer Info"/>
        </form>

        <!-- Look at how to display the user's recently watched movie-->
        <p> This is the current showing that you had just seen: </p>

        <form action="updateRating.php" method="post">
        <p> Give a rating to the movie: </p>
        <input type="radio" name="rating" value=1>1<br>
        <input type="radio" name="rating" value=2>2<br>
        <input type="radio" name="rating" value=3>3<br>
        <input type="radio" name="rating" value=4>4<br>
        <input type="radio" name="rating" value=5>5<br>
        <input type="submit" name ="submit" value="rating" />

        <?php

                include 'getCustList.php';
                include 'getMovieTitle.php';
        ?>


        </form>
        <br>
        <!-- Look at how to display the user's recently watched movie-->
        <!-- genre -->
        <p> This is the current showing that you had just seen: </p>
        <p> Showings: </p>
        <p> Genre </p>  <!-- let the user select from the multiple genres within the data base. Give a warning if there are no seats left for the showing -->

        <form action="getMovieListByGenre.php" method="post">
                <?php

                        include 'movieList.php';
                ?>


        <input type ="submit" value="Genre List">
        </form>
        <p> Date </p>   <!-- Search for date entered, make sure to change into certain format. -->
                                        <!-- Also remmember prompt warning when there is no seats left -->


        <form action="getMovieListByDate.php" method="post">
  StartDate:
          <input type="date" name="startdate">
  EndDate:
          <input type="date" name="enddate" >
          <input type="submit" value="Enter"/>
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
                <p> Copyright Jieni and Jaisen CS3319 </p>
        </footer>
        <?php
                mysqli_close($connection);
        ?>

</body>
</html>

