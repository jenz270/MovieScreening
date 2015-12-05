<!--
   getSelectedGenre.php gets the selected genre from the database, and returns some other information of the genre.
-->
<?php
   include 'connectdb.php';
   $selected_genre = $_POST['thegenre'];
   $query = 'select * from genre join movie on genre.movieID = movie.movieID where movie.movieID= ' . $selected_genre . ";";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query error");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["moviename"];
   $genre = $row["genre"];
   mysqli_close($connection);
?>
