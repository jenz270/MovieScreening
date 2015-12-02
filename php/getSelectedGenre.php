<?php
   include 'connectdb.php';
   $selected_genre = $_POST['thegenre'];
   $query = "select * from genre join movie on genre.movieID = movie.movieID where movieID='" . $selected_genre . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["moviename"];
   $genre = $row["genre"];
   mysqli_close($connection);
?>
