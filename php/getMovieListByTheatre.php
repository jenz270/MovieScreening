<!--This file returns the listing on theatre room listing and prints a message if theatre rooms are not empty -->

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
