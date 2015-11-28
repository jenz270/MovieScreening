<?php
$customerName = $_POST["customerName"];
$movieName = $_POST["movieName"];
$rate = $_POST["rate"];
$query = "update selected join customer on selected.custID = customer.custID join showing on selected.showID = showing.showID join movie on showing.movieID = movie.movieID set rate = $rate where movie.moviename = $movieName and customer.name ="" .$customerName.";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Customer Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["Customer"]."</option>";
}
mysqli_free_result($result);
?>
