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
<?php
   $genre = $_POST['genreList'];
   $whichid = $_POST['themovies'];
   $query = 'insert into genre (genre,movieID) values ('. '"'. $genre . '",' . $whichid . ')';
   //echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "<h3>". "The Genre is now added!"."</h3>";
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