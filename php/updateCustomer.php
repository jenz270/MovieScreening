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
  include 'getSelectedCustomer.php';
?>
<header>
       <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
        <h3> Updating Customer </h3>
      <form action="updateTheCustomer.php" method="post">
      Name: <input type="text" name="name" value=
      <?php
          echo "'";
          echo $custname;
          echo "'";
      ?>
      >
<br>

    Email:  <input type="text" name="email" value=
<?php
   echo "'";
   echo $custemail;
   echo "'";
?>
>
<br>

 Sex:
 <input type="text" name="sex" value=
  <?php
   echo "'";
   echo $custsex;
   echo "'";
  ?>
  >

<input type="hidden" name="custid" value=
<?php
   echo "'";
   echo $selected_cust;
   echo "'";
?>
>
<br>

<input type="submit" value="Update this Customer"><br>
   <hr>
      <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>