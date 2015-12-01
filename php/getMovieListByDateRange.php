
<?php
    $query = "select moviename,theatre.roomnum,capacity, count(selected.custID) as total from movie join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID join theatre on showing.roomnum = theatre.roomnum where showing.show_date between '2015-03-20' and '2015-03-22' group by moviename, showing.showID having total < capacity";
    $result = mysqli_query($connection,$query);
    if(!result){
        die(" Could not load movies.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
     echo $row["Current_Movies"];
    }
    mysqli_free_result($result);
?>