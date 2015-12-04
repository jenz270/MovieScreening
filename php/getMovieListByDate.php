<?php
     include 'connectdb.php';

?>

<?php
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];


    $query ="select moviename, year,theatre.roomnum,capacity, count(selected..custID) as total from movie join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID join theatre on showing.roomnum = theatre.roomnum where showing.show_date between '". $startdate. "'and '". $enddate. "'group by moviename, showing.showID having total < capacity" ;
    $result = mysqli_query($connection,$query);
    if(!result){
        die(" Could not load movies.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
     echo $row["moviename"]. ',' .$row["year"];
    }
    mysqli_free_result($result);
?>
