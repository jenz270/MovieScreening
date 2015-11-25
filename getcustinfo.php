
<?php
$customerName = $_POST["customerName"];
$query = "select * from customer where customer.name="".$customerName.";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive Customer Information");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo $row["Customer"]."</option>";
}
mysqli_free_result($result);
?>
