<!--
    sellTicket.php sells the tickets to the customer selected by the staff
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
    $custid = $_POST['thecustomers'];
    $showid = $_POST['theshowings'];
    $newprice = $_POST["price"]; 
    if(isset($_POST['thecustomers']) and isset($_POST['theshowings']) and !empty($newprice)){
    $query = 'insert into selected (rate,payment,custID,showID) values (0,'. $newprice. ",". $custid . "," . $showid . ')';
    //echo $query;
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "<h3>" ."The ticket is sold!" . "</h3>";
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