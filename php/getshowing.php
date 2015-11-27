<?php
$query = "select moviename,show_date,show_time from movie join showing where movie.movieID = showing.movieID";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive showing.");
}
echo "<select>";
echo "<option>". "Select Option"."</option>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<option>";
     echo $row["moviename"]." ".$row["show_date"]." ".$row["show_time"]."</option>";
}
mysqli_free_result($result);
echo "</select>";
?>