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
   $newcap = $_POST['cap'];
   $roomnumb= $_POST['roomnu'];
   $query = 'update theatre set capacity=' . $newcap .' where roomnum=' . $roomnumb . ";";
   //echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Theatre updated successfully";
   } else {
      echo "Error when updating theatre: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
<br>
   <form action="movieMod.php">
    <input type="submit" value="Go back to Screening Management">
   </form>

        <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>

</body>
</html>