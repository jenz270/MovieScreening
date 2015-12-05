<?php
include 'connectdb.php';
?>

<?php
$movieName = $_POST["movieList"];

$query ='select moviename,year, show_date, show_time, showing.roomnum, capacity, count(selected.custID) as total from movie join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where movie.movieID='. $movieName .' group by showing.showID';

$result = mysqli_query($connection,$query);

if (!$result) {
    die("Failed to retreive Movie Information");
}
if($rowcount==0){

	 PRINT "No showings available for this Movie!";


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