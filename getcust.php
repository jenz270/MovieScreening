<?php
$query = "select name from customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive customer.");
}
echo "<select>";
echo "<option>"."Select Option"."</option>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<option>";
     echo $row["fname"]." ".$row["lname"]."</option>";
}
mysqli_free_result($result);
echo "</select>";
?>