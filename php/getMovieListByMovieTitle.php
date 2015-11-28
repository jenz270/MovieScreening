<?php

$movieName = $_POST["moviename"];
$query ='select moviename, capacity, count(selected.custID) as total from movie left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum where moviename ="'. $movieName.'"  group by showing.showID having total < capacity';
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Movie Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["moviename"];
}
mysqli_free_result($result);
?>