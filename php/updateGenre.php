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
  include 'getSelectedGenre.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Genre </h3>
      <form action="updateTheGenres.php" method="post">
    Movie Name: <input type="text" name="movititle" value=
      <?php
          echo "'";
          echo $movietitle;
          echo "'";
      ?>
      >
    <br>

     Genre: <input type="text" name="genre" value=
        <?php
           echo "'";
           echo $genre;
           echo "'";
        ?>
        >
  <br>

<input type="hidden" name="movieid" value=
<?php
   echo "'";
   echo $selected_genre;
   echo "'";
?>
>
<br>
<input type="submit" value="Update this movie">
<br>
   <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>