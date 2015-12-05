<!-- 
  getMovieArray.php gets the movies within the movie table, and prints as a radio list
-->
<?php
   $query = "select * from movie";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="themovies" value="';
        echo $row["movieID"];
        echo '">' . $row["moviename"]. "<br>";
   }
   mysqli_free_result($result);
?>
