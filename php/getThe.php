<?php
   $query = "select * from theatre";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
    echo "<br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="theTheatre[]" value="';
        echo $row["roomnum"];
        echo '">' . $row["roomnum"].', '. $row["capacity"]."<br>";
   }
   mysqli_free_result($result);
?>