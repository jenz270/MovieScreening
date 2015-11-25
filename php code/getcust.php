<?php
$query = "select name from customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive customer.");
}

while ($row = mysqli_fetch_assoc($result)) {
     echo $row["genre"]. " ". $row["name"]."</option>";
}
mysqli_free_result($result);
?>