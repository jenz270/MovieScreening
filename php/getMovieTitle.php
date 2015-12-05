<!--
  getMovieTitle.php gets all movies in the database
-->
<?php
   include 'connectdb.php';
   $query = "select * from movie";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   echo "<h3>". "Select a movie: " . "</h3>";
   echo '<select name="'. "movieList".'">';
   echo '<option value="' . " " . '">';
   echo ' ' . "</option>";
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row["movieID"]. '">';
        echo $row["moviename"]. "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>

