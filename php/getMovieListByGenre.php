<!--This file returns the showing based on the Genre selected by the customer, if there are no movies for that Genre a message is printed. Also prints for full rooms -->


<!--Uses a date picker to get dates and returns if there are showings between the picked days or if there are no seats available-->
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

$genre = $_POST["genreList"];

$query =  "select moviename,year, capacity,show_date, show_time,showing.roomnum, count(selected.custID) as total from genre left join movie on genre.movieID = movie.movieID left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where genre.movieID ='" . $genre. "' group by showing.showID"; 

$result = mysqli_query($connection,$query);

if (!$result) {

    die("Failed to retreive Movie Information");

}

$rowcount = mysqli_num_rows($result);


if($rowcount==0){

	 PRINT "No showings available for this Genre!";



}


else{


	while ($row = mysqli_fetch_assoc($result)) {

	$capacity = ['capacity'];
	$total = ['total'];

		if($capacity < $total){

     			echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"]. "</br>";
}

		else{

     			echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"]. "   " . "There are no available seats!". "</br>";


}


}

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

