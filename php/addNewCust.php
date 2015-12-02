<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../jQuery/changePage.js"></script>
</head>
<body>
<?php
   include 'connectdb.php';
?>
    <header>
         <h2> Jieni and Jaisen's Movie Screening Management System </h2>
    </header>
<?php
    $custName = $_POST["custname"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
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