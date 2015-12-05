<----



<?php

include 'connectdb.php';


    $query = "select moviename,year, capacity, count(selected.custID) as total from movie left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum group by showing.showID having total < capacity";
    $result = mysqli_query($connection,$query);
    if(!result){
        die(" Could not load movies.");
    }
     

    $rowcount = mysqli_num_rows($result);


    if($rowcount==0){


        PRINT "There is no showing available";

        }

   else{


    while ($row = mysqli_fetch_assoc($result)) {


     echo $row["moviename"]. " - ". $row["year"] . " - " . $row["roomnum"]. "</br>";
    }

}
    mysqli_free_result($result);
?>
