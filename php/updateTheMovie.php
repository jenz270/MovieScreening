<?php
   include 'connectdb.php';
   $newyear = $_POST['movyear'];
   $newtitle = $_POST['movtitle'];
   $movieid = $_POST['movid'];
   $query = 'update movie set moviename="' . $newtitle . '", year=' . $newyear . " where movieID='" . $movieid . "';";
   echo $query;
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Movie updated successfully";
   } else {
      echo "Error when updating movie: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
