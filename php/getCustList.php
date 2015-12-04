
<?php
   include 'connectdb.php';


   $query = "select * from customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   echo '<select name="'. "customerList".'">';
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row["custID"]. '">';
        echo $row["name"]. "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>
