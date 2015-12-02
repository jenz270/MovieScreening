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
<h2>Here are the Movies:</h2>
<?php
   $newMovie= $_POST["movien"];
   $movieYear = $_POST["year"];
   $query1= 'select max(movieID) as maxid from movie';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $movieid = (string)$newkey;
   $query = 'insert into movie (movieID,moviename,year) values(' . $movieid . ',"' . $newMovie . '",' . $movieYear . ')';
   //echo $query;
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