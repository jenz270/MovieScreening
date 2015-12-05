<!--
  addNewTheatre.php adds the new theatre information entered by the staff into the database
-->

<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>

<?php
   include 'connectdb.php';
   $newRoom= $_POST["roomnumb"];
   $newCap = $_POST["capa"];
   if (!empty($newMovie) and !empty($movieYear)){
   $query = 'insert into theatre (roomnum,capacity) values('. $newRoom .",". $newCap . ')';
   // echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The Theatre is added!";
   mysqli_close($connection);
 }
 else{
    echo "Please make sure to fill out all fields! Click the button below and make sure to fill all information.";
 }
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