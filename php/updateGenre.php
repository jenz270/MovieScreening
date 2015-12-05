<!--
  updateGenre.php allows the staff to update the genre information of a movie
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
  include 'getSelectedGenre.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Genre </h3>
      <form action="updateTheGenres.php" method="post">
    Movie Name: <input type="text" value=
      <?php
          echo "'";
          echo $movietitle;
          echo "'";
      ?>
      >
    <br>
     Genre: 
       <select name="genreList">
                    <option value=" "> </option>
                    <option value="Comedy">Comedy</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Documentary">Documentary</option>
      </select>
  <br>

<input type="hidden" name="movieid" value=
<?php
   echo "'";
   echo $selected_genre;
   echo "'";
?>
>
<br>
<input type="submit" value="Update this Genre">
<br>
   <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>