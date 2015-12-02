<?php
   include 'connectdb.php';
   $newtitle = $_POST['movititle'];
   $newgenre = $_POST['genre'];
   $movieid = $_POST['movid'];
   $query = 'update genre set moviename="' . $newtitle . '", genre="' . $newgenre . '" where movieID=' . $movieid . ";";
   echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Genre updated successfully";
   } else {
      echo "Error when updating genre: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
