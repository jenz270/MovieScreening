<!--
  update.php prints fields for the staff to enter the updated information.
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
  include 'getSelectedMovie.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Movies </h3>
      <form action="updateTheMovie.php" method="post">
      Movie Title: <input type="text" name="movititle" value=
      <?php
          echo "'";
          echo $movietitle;
          echo "'";
      ?>
      >
<br>

Movie Year:  <input type="number" name="movyear" min="1920" max="2020" step="1" value=
<?php
   echo "'";
   echo $movieyear;
   echo "'";
?>
>
<br>

<input type="hidden" name="movid" value=
<?php
   echo "'";
   echo $selected_movie;
   echo "'";
?>
>
<br>

<input type="submit" value="Update this movie"><br>
   <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>