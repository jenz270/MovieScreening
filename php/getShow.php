<?php
   $query = "select * from showing join movie on showing.movieID = movie.movieID";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="theshowings[]" value="';
        echo $row["showID"];
        echo '">' . $row["moviename"]. ', '. $row["show_date"].', '. $row["show_time"]."<br>";
   }
   mysqli_free_result($result);
?>