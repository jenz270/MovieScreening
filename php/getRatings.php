<!--
	getRatings.php gets the movies that have a rating of 4 or more
-->

<?php
$query = "select moviename,avg(rate) as total from movie join showing on movie.movieID = showing.movieID join selected on showing.showID = selected.showID group by moviename having total >=4";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive ratings.");
}

while ($row = mysqli_fetch_assoc($result)) {
     echo $row["moviename"]."</br>";
}
mysqli_free_result($result);
?>