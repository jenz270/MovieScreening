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
  include 'getSelectedShow.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Movies </h3>
      <form action="updateTheShowings.php" method="post">
    Movie Name: <input type="text" value=
      <?php
          echo "'";
          echo $movietitle;
          echo "'";
      ?>
      >
<br>

      Showing Date:  <input type="date" name="showdate" value=
        <?php
           echo "'";
           echo $showDate;
           echo "'";
        ?>
        >
  <br>

  Showing Time:  <input type="time" name="showtime" value=
  <?php
     echo "'";
     echo $showTime;
     echo "'";
  ?>
  >
  <br>

<input type="hidden" name="showid" value=
<?php
   echo "'";
   echo $selected_showing;
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