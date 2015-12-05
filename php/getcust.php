<!--
  getCust.php gets all customers and allows selection from menu
-->
<?php
   $query = "select * from customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "<br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="thecustomers" value="';
        echo $row["custID"];
        echo '">' . $row["name"]. "<br>";
   }
   mysqli_free_result($result);
?>
