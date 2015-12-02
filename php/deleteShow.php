<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from showing where showID='" . $value . "';";
                           deleteShowing($delsql,$connection);
                   }
           }
   }

   function deleteShowing($deleteCommand,$conn) {
      if (mysqli_query($conn,$deleteCommand)) {
           echo "<h3>Showing deleted successfully!</h3>";
           // echo "<button class="goBack" type="button" onclick="history.go(-1)">Go Back</button>"; // a method to redirect back to page
      } else {
           echo "<p>Problem with deleting showing: " . mysqli_error($conn) . "</p>";
      }
    } //end of deleteMovie function

   include 'connectdb.php';
   IsChecked('theshowings',$connection);
   mysqli_close($connection);
?>

<hr>
         <form action="movieMod.php">
          <input type="submit" value="Back to Screenings Management">
         </form>
        <hr>
        <footer>
            &copy; Jieni and Jaisen
        </footer>
</body>
</html>