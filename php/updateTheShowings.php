<!--
  updateTheShowings.php updates the showings edited by the staff on the database
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
<?php
   include 'connectdb.php';
   $newdate= $_POST['showdate'];
   $newtime =$_POST['showtime'];
   $showid = $_POST['showid'];
    if (!empty($newtime) and !empty($newdate) and ($_POST["showid"] != " ")){
   $query = 'update showing set show_date='. "'". $newdate . "'". ', show_time='. "'". $newtime ."' ". 'where showID='. $showid . ";";
   //echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Showing updated successfully";
   } else {
      echo "Error when updating showing: " . mysqli_error($connection);
   }
 }
 else{
   echo "Please make sure to fill out all fields! Click the button below and make sure to fill all information.";
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