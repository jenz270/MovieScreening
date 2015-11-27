<!-- 
	CS3319 Assignment 3 
	Jieni Hou Jaisen Bynoe
	index.php is the file that logs the login towards the management system
-->

<!DOCTYPE html>
<html>
<head>
	<title> Screenings Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
<body>
	<header>
	<h1> Welcome to Jieni and Jaisen's Screening Company </h1>
    </header>
	<p> Choose your login below: </p> 
	<form action="php/customer.php" method="post">
		<input type="submit" value="Customer">
	</form>
	<br>
	<form action="php/staff.php" method="post">
		<input type="submit" value="Staff">
	</form>

	<hr>
	<br>
	<h2> Now Showing: </h2>
	<div id="gallery">
		<ul>
			<li> <img src="https://s-media-cache-ak0.pinimg.com/236x/90/bc/ea/90bceaf32997194a90febf0b5345a15c.jpg"></li>
			<li> <img src="http://images.wookmark.com/100251_thor_ver5_xxlg.jpg" width="236" height="349"></li>
			<li> <img src="http://a.dilcdn.com/bl/wp-content/uploads/sites/2/2014/01/finding-nemo-poster.jpg" width="236" height="349"></li>
		</ul>
	</div>
	<footer>
		&copy; Jieni and Jaisen
	</footer>
</body>
</html>

