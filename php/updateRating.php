?php

include 'connectdb.php';


$customerName = $_POST["customerList"];
$movieName = $_POST["movieList"];
$rate = $_POST["rating"];
$query = "update selected join customer on selected.custID = customer.custID join showing on selected.showID = showing.showID join movie on showing.movvieID = movie.movieID set rate ='".$rate. "' where movie.moviename ='" .$$movieName. "' and  customer.name = '".$customerName. "'";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Customer Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo "Successfully updated!";
}
mysqli_free_result($result);
?>

