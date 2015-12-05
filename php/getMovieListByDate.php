
<!--Uses a date picker to get dates and returns if there are showings between the picked days or if there are no seats available-->


<?php
     include 'connectdb.php';

?>

<?php

    $startdate = $_POST['startdate'];

    $enddate = $_POST['enddate'];


    $query ="select moviename, year, show_date, show_time, showing.roomnum,capacity, count(selected..custID) as total from movie join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID join theatre on showing.roomnum = theatre.roomnum where showing.show_date between '". $startdate. "'and '". $enddate. "'group by moviename, showing.showID" ;


    $result = mysqli_query($connection,$query);



    if(!result){
        die(" Could not load movies.");
    }

    $rowcount = mysqli_num_rows($result);

  


    if($rowcount==0){

	 PRINT "No showings available for this Date Range!";


        return;

}


    else{


	while ($row = mysqli_fetch_assoc($result)) {

	$capacity = ['capacity'];
	$total = ['total'];

		if($capacity < $total){

     			echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"]. "</br>";
}

		else{

     			echo $row["moviename"]. " - " . $row["year"] . " - " . $row["show_date"] . " - ". $row["show_time"]. " - " .$row["roomnum"]. "   " . "There are no available seats!". "</br>";


}


}

}
mysqli_free_result($result);
?>
