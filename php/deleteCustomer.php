<!-- 
  deleteCustomer.php deletes the customer selected by the staff from the database
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
        <hr>
        <br>
<?php
   function IsChecked($chkname,$connection)  {

           if (!empty($_POST[$chkname]))  {
                   foreach($_POST[$chkname] as $value) {
                           $delsql="delete from customer where custID='" . $value . "';";
                           deleteCustomer($delsql,$connection);
                   }
           }
   }

   function deleteCustomer($deleteCommand,$conn) {
      if (mysqli_query($conn,$deleteCommand)) {
           echo "<h3>Customer deleted successfully</h3>";
      } else {
           echo "<p>Problem with deleting Customer: " . mysqli_error($conn) . "</p>";
      }
    } //end of deleteMovie function
   include 'connectdb.php';
   if(isset($_POST['thecustomers'])){
   IsChecked('thecustomers',$connection);
 }
 else{
    echo "<h3>" ."Please make sure to select an option. Click the button to go back.". "</h3>";
 }
   mysqli_close($connection);
?>

  <br>
        <hr>
         <form action="staff.php">
          <input type="submit" value="Back to Management Summary">
         </form>
        <hr>
        <footer>
            &copy; Jieni and Jaisen
        </footer>
        <?php
                mysqli_close($connection);
        ?>
</body>
</html>
