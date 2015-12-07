
<!--Uses a date picker to get dates and returns if there are showings between the picked days or if there are no seats available-->
<!DOCTYPE html>
<html>
<head>
    <title>Screenings Customer</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
    </header>
    <hr>
    <br>
    <?php
    include 'connectdb.php';

    $startdate = $_POST['startdate'];

    $enddate = $_POST['enddate'];

    if (!empty($startdate) and !empty($enddate)){
        $query ="select moviename, year, show_date, show_time, showing.roomnum,capacity, count(selected.custID) as total from movie join showing on movie.movieID = showing.movieID left join selected on selected.showID = showing.showID join theatre on showing.roomnum = theatre.roomnum where showing.show_date between '". $startdate. "'and '". $enddate. "'group by moviename, showing.showID";

        $result = mysqli_query($connection,$query);


        if(!result){
            die(" Could not load movies.");
        }

        $rowcount = mysqli_num_rows($result);

        if($rowcount==0){

          PRINT "No showings available for this Date Range!";
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
}

else{
    echo "Please select a date range.";
}
mysqli_close($connection);
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


