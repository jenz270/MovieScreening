<?php
   include 'connectdb.php';
   $newdate= $_POST['showdate'];
   $newtime =$_POST['showtime'];
   $showid = $_POST['showid'];
   $query = 'update showing set show_date='. "'". $newdate . "'". ', show_time='. "'". $newtime ."' ". 'where showID='. $showid . ";";
   echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Showing updated successfully";
   } else {
      echo "Error when updating showing: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
