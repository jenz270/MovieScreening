<!-- 
   getSelectedCustomer.php gets the selected customer's information
-->

<?php
   include 'connectdb.php';
   $selected_cust = $_POST['thecustomers'];
   $query = "select * from customer where custID='" . $selected_cust . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $custname = $row["name"];
   $custemail = $row["email"];
   $custsex = $row["sex"];
   mysqli_close($connection);
?>
