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
 if (mysqli_query($connection, $query)) {
      echo "Updated Successfully";
   } else {
      echo "Failed to update for Customer " . mysqli_close(connection);
   }

mysqli_close($connection);

?>

