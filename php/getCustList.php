<!-- 
  getCustList.php gets the list of customers from the database
-->
<?php
   include 'connectdb.php';

   $query = "select * from customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   echo "<h3>". "Select a customer: " . "</h3>";
   echo '<select name="'. "customerList".'">';
   echo '<option value="' . " " . '">';
   echo ' ' . "</option>";
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row["custID"]. '">';
        echo $row["name"]. "</option>";
   }
   echo "</select>";
   mysqli_free_result($result);
?>
