<!--
  updateTheMovie.php updates the information that is modified by the staff
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
   $newyear = $_POST['movyear'];
   $newtitle = $_POST['movititle'];
   $movieid = $_POST['movid'];
   
  if(!empty($newyear) and !empty($newtitle)){
   $query = 'update movie set moviename="' . $newtitle . '", year=' . $newyear . " where movieID='" . $movieid . "';";
   //echo $query;   // use this temporarily to see errors
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Movie updated successfully";
   } else {
      echo "Error when updating movie: " . mysqli_error($connection);
   }
 }
  else{
    echo "Please key in the correct information to update.";
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