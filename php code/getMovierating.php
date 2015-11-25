<?php
$customerName = $_POST["customerName"];
$query = "select moviename, ratings from movie join showing on movie.movieID = showing.movieID join selected on showing.showID = selected.showID join customer on selected.custID = customer.custID where customer.name ="".$customerName.";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive customer's Movie Title and Rating.");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["Movie"]. " ". $row["Rating"]."</option>";
}
mysqli_free_result($result);
?>
