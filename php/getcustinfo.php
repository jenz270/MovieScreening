<?php
include 'connectdb.php';
?>

<?php
$custname = $_POST["customerList"];
$query ="select name, email ,sex, moviename, rate, genre from customer join selected on customer.custID = selected.custID join showing on selected.showID = showing.showID join movie on showing.movieID = movie.movieID join genre on genre.movieID = movie.movieID where customer.custID ='" . $custname."'";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Customer Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["name"] . " - " . $row["email"] . " - " . $row["sex"] . " - " . $row["password"] . "</br>";
     echo $row["moviename"] . " - " . $row["genre"] . " - " . $row["rate"] . "</br>";
}
mysqli_free_result($result);
?>

