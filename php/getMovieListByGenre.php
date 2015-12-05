<?php

include 'connectdb.php';

$genre = $_POST["genre"];

$query =  "select moviename,year, capacity,show_date, show_time,showing.roomnum, count(selected.custID) as total from genre join movie on genre.movieID = movie.movieID left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where genre.movieID ='" . $genre. "' group by showing.showID having total < capacity"; 

$result = mysqli_query($connection,$query);

if (!$result) {

    die("Failed to retreive Movie Information");

}

$rowcount = mysqli_num_rows($result);


if($rowcount==0){

	PRINT "There are no available showing";

}


else{


	while ($row = mysqli_fetch_assoc($result)) {


	      echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . "</br>";

	}
}


mysqli_free_result($result);
?>