<?php
   $query = "select * from genre join movie on genre.movieID = movie.movieID";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="thegenre[]" value="';
        echo $row["movieID"];
        echo '">' . $row["moviename"].', '. $row["genre"]."<br>";
   }
   $movid = $_POST['movieID'];
   $genre = $_POST['genre'];
   mysqli_free_result($result);
?>