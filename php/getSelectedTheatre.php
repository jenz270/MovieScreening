<!--
   getSelectedTheatre.php gets information of the selected theatre
-->

<?php
   include 'connectdb.php';
   $selected_theatre = $_POST['thetheatres'];
   $query = 'select * from theatre where roomnum='. $selected_theatre . ";";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $roomn = $row["roomnum"];
   $capac = $row["capacity"];
   mysqli_close($connection);
?>
