<?php
$query = "select name from customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive customer.");
}
echo "<select>"
while ($row = mysqli_fetch_assoc($result)) {
     echo "<option>".$row["genre"]. " ". $row["name"]."</option>";
}
echo "</select>"
mysqli_free_result($result);
?>