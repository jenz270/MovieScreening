<!--
  deleteGen.php deletes the genre selected by the staff from the database
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
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>
<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from genre where movieID='" . $value . 'and genre="'. '";';
                           deleteGenre($delsql,$connection);
                   }
           }
   }

   function deleteGenre($deleteCommand,$conn) {
      if (mysqli_query($conn,$deleteCommand)) {
           echo "<h3>Genre deleted successfully!</h3>";
           // echo "<button class="goBack" type="button" onclick="history.go(-1)">Go Back</button>"; // a method to redirect back to page
      } else {
           echo "<p>Problem with deleting genre: " . mysqli_error($conn) . "</p>";
      }
    } //end of deleteMovie function

   include 'connectdb.php';
   if(isset($_POST['thegenre'])){
   IsChecked('thegenre',$connection);
   mysqli_close($connection);
   }
   else{
    echo "Please make sure to select an option. Click the button to go back.";
   }
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