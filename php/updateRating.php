<!--Used to let the customer update the rating a movie they have seen-->

<?php

include 'connectdb.php';

if(isset($_POST['rating'])){
$customerName = $_POST["customerList"];
$movieName = $_POST["movieList"];
$rate = $_POST["rating"];
$query = "update selected join customer on customer.custID=selected.custID join showing on selected.showID = showing.showID join movie on showing.movieID = movie.movieID set rate ='".$rate. "' where movie.movieID ='" .$movieName. "' and  selected.custID = '".$customerName. "'";

$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Customer Information");
}
 if (mysqli_query($connection, $query)) {
      echo "Updated Successfully";
   } else {
   echo "Failed to update for Customer ";
   }
}
else{
     echo "Please select a number!";
}
mysqli_close($connection);

?>

