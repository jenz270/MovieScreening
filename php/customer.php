<!--  Calls methods to allow the customer to view various showing lists as well as their own profile  -->
<!DOCTYPE html>
<html>
<head>
        <title>Screenings Customer</title>
         <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
         <?php
    include 'connectdb.php';
    ?>
	<header>
		<h2> Welcome to Jieni and Jaisen's Movie Screening Management System </h2>
	</header>
	
	<hr>
  <div id="current">
    <h2 class="titles"> Customer Login </h2>
    <form action="getProfile.php" method="post">
    <?php
    include 'getCustList.php';
    ?>
    <br><input type="submit" name="submit" value="Enter">
    </form>
	<br>
</div>
    <hr>
         <form action="../index.php">
          <input type="submit" value="Back">
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

