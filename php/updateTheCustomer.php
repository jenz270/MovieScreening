<!--
  updateTheCustomer.php updates the customer information entered into the database
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
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <hr>
        <br>
<?php
   include 'connectdb.php';
   $newname = $_POST['name'];
   $newemail = $_POST['email'];
   $newsex= $_POST['sex'];
   $custid = $_POST['custid'];
   if(!empty($newname) and !empty($newemail) and !empty($custid)){
   $query = 'update customer set name="' . $newname . '", email="' . $newemail . '" '. ',' . 'sex= "'. $newsex .'"'. " where custID='" . $custid . "';";
   //echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Customer updated successfully";
   } else {
      echo "Error when updating Customer: " . mysqli_error($connection);
   }
 }
 else{
     echo "<h3>" . "Please make sure to fill out all fields! Click the button below and make sure to fill all information." . "</h3>";  
 }
   mysqli_close($connection);
?>
<br>
<hr>
   <form action="staff.php">
    <input type="submit" value="Go back to Management Summary">
   </form>

        <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>

</body>
</html>