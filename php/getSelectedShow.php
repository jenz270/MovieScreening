<?php
   include 'connectdb.php';
   $selected_showing = $_POST['theshowings'];
   $query = "select * from showing join movie on showing.movieID = movie.movieID where showID='" . $selected_showing . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["moviename"];
   $showDate = $row["show_date"];
   $showTime= $row["show_time"];
   mysqli_close($connection);
?>
