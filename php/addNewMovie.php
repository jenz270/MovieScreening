<!--     
addNewMovie.php adds the movie that is entered by the staff into the database. 
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
   include 'uploadPicture.php';
   include 'connectdb.php';
?>
        <header>
           <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
<?php
   $newMovie= $_POST["movien"];
   $movieYear = $_POST["year"];
   $newGenre = $_POST["genreList"];
   
   // add error checking to check that information is entered 
   if (!empty($newMovie) and !empty($movieYear) and ($_POST["genreList"] != " ")){
   $query1= 'select max(movieID) as maxid from movie';
   $result=mysqli_query($connection,$query1);
    if (!$result) {
          die("database max query failed.");
      }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $movieid = (string)$newkey;
   $query = 'insert into movie (movieID,moviename,year,moviepicture) values (' . $movieid . ',"' . $newMovie . '",' . $movieYear . ',"'. $moviepic .'")';
   $query2 = 'insert into genre (genre,movieID) values ('. '"'. $newGenre . '",' . $movieid . ')';

   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    if (!mysqli_query($connection, $query2)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your movie was added!";
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