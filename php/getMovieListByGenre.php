<?php

$genre = $_POST["genre"];
$query ='select moviename, capacity, count(selected.custID) as total from genre join movie on genre.movieID = movie.movieID left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where genre ="'. $genre.'"  group by showing.showID having total < capacity';
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Movie Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["genre"];
}
mysqli_free_result($result);
?>