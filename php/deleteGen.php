<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from genre where movieID='" . $value . "';";
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
   IsChecked('thegenre',$connection);
   mysqli_close($connection);
?>