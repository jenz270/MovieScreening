
<?php
    $query = "select moviename, capacity, count(selected.custID) as total from movie left join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID left join theatre on showing.roomnum = theatre.roomnum group by showing.showID having total < capacity";
    $result = mysqli_query($connection,$query);
    if(!result){
        die(" Could not load movies.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
     echo $row["Current_Movies"];
    }
    mysqli_free_result($result);
?>