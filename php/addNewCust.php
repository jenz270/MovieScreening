<!--
  addNewCust.php adds the new customer into the database
-->

<!DOCTYPE html>
<html>
<head>
  <title>JJ Screenings Management</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php
  include 'connectdb.php';
  ?>
  <header>
   <h2> Jieni and Jaisen's Movie Screening Management System </h2>
 </header>
 <hr>
 <br>
 <?php
 $custName = $_POST["custname"];
 $email = $_POST["email"];
 $sex = $_POST["sex"];
 if(!empty($custName) and !empty($email) and !empty($sex)){
  $query1= 'select max(custID) as maxid from customer';
  $result=mysqli_query($connection,$query1);
  if (!$result) {
    die("database max query failed.");
  }
  $row=mysqli_fetch_assoc($result);
  $newkey = intval($row["maxid"]) + 1;
  $custid = (string)$newkey;
  $query = 'insert into customer (custID,name,email,sex) values(' . $custid . ',"' . $custName . '","' . $email . '","' . $sex . '")';
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Error: insert failed" . mysqli_error($connection));
  }
  echo "The Customer was added!";
}
else{
 echo "<h3>" . "Please make sure to fill out all fields! Click the button below and make sure to fill all information." . "</h3>";
}
mysqli_close($connection);
?>

<br>
<hr>
<form action="staff.php">
  <input type="submit" value="Back to Management Summary">
</form>
<hr>
<footer>
  &copy; Jieni and Jaisen
</footer>

</body>
</html>