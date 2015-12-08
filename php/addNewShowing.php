<!--
  addNewShowing.php adds the new showing into the database
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
   $newTime= $_POST["showtime"];
   $newDate = $_POST["showdate"];
   $newRoom = $_POST["roomnum"];
   $whichid = $_POST['themovies'];
   if (!empty($newTime) and !empty($newDate) and !empty($newRoom) and isset($_POST['themovies'])){

   $query1= 'select max(showID) as maxid from showing';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $showid = (string)$newkey;
   $query = 'insert into showing (movieID,showID,roomnum,show_date,show_time) values ('. $whichid . ','. $showid .','. $newRoom .','."'". $newDate . "'". ',' ."'". $newTime . "'".  ')';
   //echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "<h3>". "The Showing is now added!"."</h3>";
 }
 else{
  echo "Please make sure to fill out all fields! Click the button below and make sure to fill all information.";
 }
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