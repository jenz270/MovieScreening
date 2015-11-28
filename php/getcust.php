<?php
$query = "select name from customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive customer.");
}
echo "<select>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<option>".$row["name"]."</option>";
}
echo "</select>";

$result= $database->query($query);
while($country = $database->fetch_array($result_set)) {
    if ($country["code"] == "AU"){
        echo "<option value=\"{$country['code']}\" selected=\"selected\">{$country['name']}</option>";
}
mysqli_free_result($result);
?>