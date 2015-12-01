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