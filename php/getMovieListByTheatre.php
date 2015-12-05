<!--This file returns the listing on theatre room listing and prints a message if theatre rooms are not empty -->
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
    $query = "select moviename,year, capacity, count(selected.custID) as total from movie left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum group by showing.showID having total < capacity";
    $result = mysqli_query($connection,$query);
    if(!result){
        die(" Could not load movies.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
       echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"]. "</br>";
}
    mysqli_free_result($result);
?> 
     <hr>
         <form action="customer.php">
          <input type="submit" value="Back to Profile">
         </form>
        <hr>

	<footer>
		&copy; Jieni and Jaisen
	</footer>
</body>
</html>

