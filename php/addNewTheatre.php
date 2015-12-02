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
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>

<?php
   include 'connectdb.php';
?>
<?php
   $newRoom= $_POST["roomnumb"];
   $newCap = $_POST["capa"];
   $query = 'insert into theatre (roomnum,capacity) values('. $newRoom .",". $newCap . ')';
   // echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The Theatre is added!";
   mysqli_close($connection);
?>

      <br>
        <hr>
         <form action="movieMod.php">
          <input type="submit" value="Back to Screening Management">
         </form>
        <hr>
    <footer>
            &copy; Jieni and Jaisen
        </footer>

</body>
</html>