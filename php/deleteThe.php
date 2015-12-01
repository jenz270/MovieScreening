<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from theatre where roomnum='" . $value . "';";
                           deleteTheatre($delsql,$connection);
                   }
           }
   }

   function deleteTheatre($deleteCommand,$conn) {
      if (mysqli_query($conn,$deleteCommand)) {
           echo "<h3>Theatre room deleted successfully!</h3>";
           // echo "<button class="goBack" type="button" onclick="history.go(-1)">Go Back</button>"; // a method to redirect back to page
      } else {
           echo "<p>Problem with deleting theatre room: " . mysqli_error($conn) . "</p>";
      }
    } //end of deleteMovie function

   include 'connectdb.php';
   IsChecked('theTheatre',$connection);
   mysqli_close($connection);
?>