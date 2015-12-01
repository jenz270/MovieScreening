<?php
   include 'connectdb.php';
   $selected_movie = $_POST['themoviesupdate'];
   $query = "select * from movie where movieid='" . $selected_movie . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["moviename"];
   $movieyear = $row["movieyear"];
   mysqli_close($connection);
?>
