<!-- 
	CS3319 Assignment 3 
	Jieni Hou
	index.php is the file that logs the login towards the management system
-->

<!DOCTYPE html>
<html>
<head>
	<title> Screenings Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1> Welcome to Jieni and Jaisen's Screening Company </h1>
	<p> Choose your login below: </p> 
	<!-- Add customer.php , and check how to read the customer's name-->
	<form action="customer.php" method="post">
		<input type="submit" value="Customer">
	</form>
	<br>
		<!-- Add staff.php -->
	<form action="staff.php" method="post">
		<input type="submit" value="Staff">
	</form>
</body>
</html>

