<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from movie where movieID='" . $value . "';";
                           deleteMovie($delsql,$connection);
                   }
           }
   }

   function deleteMovie($deleteCommand,$conn) {
      if (mysqli_query($conn,$deleteCommand)) {
           echo "<h2>Movies deleted successfully</h2>";
      } else {
           echo "<p>Problem with deleting movie: " . mysqli_error($conn) . "</p>";
      }
    } //end of deleteMovie function

   include 'connectdb.php';
   IsChecked('themovies',$connection);
   mysqli_close($connection);
?>