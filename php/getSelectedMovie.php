<!--
   getSelectedMovie.php gets the movie that is selected by the staff.
-->
<?php
   include 'connectdb.php';
   $selected_movie = $_POST['themovies'];
   $query = "select * from movie where movieID='" . $selected_movie . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["moviename"];
   $movieyear = $row["year"];
   }  
   mysqli_close($connection);
?>
