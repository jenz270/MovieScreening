<!-- Returns the genres from the database into a dropdown list that the user can select--> 
<?php
   include 'connectdb.php';
   $query = "select * from genre join movie on genre.movieID = movie.movieID";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   echo '<select name="'. "genreList".'">';
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row["movieID"]. '">';
        echo $row["genre"]. "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>

