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
<h2>Here are the Showings:</h2>
<?php
   $newTime= $_POST["showtime"];
   $newDate = $_POST["showdate"];
   $newRoom = $_POST["roomnum"];
   $whichid = $_POST['themovies'];
   $query1= 'select max(showID) as maxid from showing';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $showid = (string)$newkey;
   $query = 'insert into showing (movieID,showID,show_date,show_time,roomnum) values ('."'" . $whichid ."'". ','. $showid .','. "'". $newDate . "'". ',' ."'". $newTime . "'". ',' . $newRoom . ')';
   echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your movie was added!";
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