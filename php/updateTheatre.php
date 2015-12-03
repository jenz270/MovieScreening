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
  include 'getSelectedTheatre.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Genre </h3>
      <form action="updateTheTheatre.php" method="post">
    Room Number: <input type="text" name="roomnu" value=
      <?php
          echo "'";
          echo $roomn;
          echo "'";
      ?>
      >
    <br>

     Capacity: <input type="text" name="cap" value=
        <?php
           echo "'";
           echo $capac;
           echo "'";
        ?>
        >
  <br>

<input type="submit" value="Update this Theatre">
<br>
   <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>