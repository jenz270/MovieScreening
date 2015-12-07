<!-- Returns if a movie has a showing by title and will tell the costumer if seats are not available-->

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


$rowcount = mysqli_num_rows($result);


if($rowcount==0){

	 PRINT "No showings available for this Movie!";


        return;

}


else{


	while ($row = mysqli_fetch_assoc($result)) {

	$capacity = ['capacity'];
	$total = ['total'];

		if($capacity < $total){

     			echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"] .'<img src="'. $row["moviepicture"] .'" height="360" width="240">' . "</br>";
}

		else{

     			PRINT "There are no available seats!";
			return;


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