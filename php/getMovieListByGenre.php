<!--This file returns the showing based on the Genre selected by the customer, if there are no movies for that Genre a message is printed. Also prints for full rooms -->


<?php

include 'connectdb.php';

$genre = $_POST["genre"];

$query =  "select moviename,year, capacity,show_date, show_time,showing.roomnum, count(selected.custID) as total from genre left join movie on genre.movieID = movie.movieID left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where genre.movieID ='" . $genre. "' group by showing.showID"; 

$result = mysqli_query($connection,$query);

if (!$result) {

    die("Failed to retreive Movie Information");

}

$rowcount = mysqli_num_rows($result);


if($rowcount==0){

	 PRINT "No showings available for this Genre!";


        return;

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