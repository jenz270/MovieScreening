
<?php
   include 'connectdb.php';


   $query = "select * from movie";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   echo '<select name="'. "movieList".'">';
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row["movieID"]. '">';
        echo $row["moviename"]. "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>

