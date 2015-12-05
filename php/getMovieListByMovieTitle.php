<?php
include 'connectdb.php';
?>

<?php
$movieName = $_POST["movieList"];

$query ='select moviename,year,showing.roomnum, capacity, count(selected.custID) as total from movie left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where movie.movieID='. $movieName .' group by showing.showID having total < capacity';

$result = mysqli_query($connection,$query);

if (!$result) {
    die("Failed to retreive Movie Information");
}

$rowcount = mysqli_num_rows($result);

if($rowcount ==0){

	PRINT "No available showing for this title";

}

else{

	while ($row = mysqli_fetch_assoc($result)) {
     		echo $row["moviename"] . ','. $row["year"] .','. $row["roomnum"] ."</br>";
	}
}


mysqli_free_result($result);
?>
