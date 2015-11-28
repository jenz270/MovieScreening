<!DOCTYPE html>
<html>
<head>
        <title>Screenings Management </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
        <?php
    include 'connectdb.php';
    ?>
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>

        <br>

        <h2> Selling Tickets: </h2>
        <p>Customers:</p>
        <?php
        include 'getcust.php';
        ?>
        <p>Showing:</p>
        <?php
        include 'getShowing.php';
        ?>

        <form action="sellticket.php">
        <p>Ticket Price: <input type="text" name="price"><br></p> 
        <input type="submit" value="Sell Ticket">
        </form>
        

        <!-- display using drop down box, format information to be displayed within a constrained box -->
        <!-- total ticket sales for genre -->
        <!-- total number of movies within the genre -->
        <h2> Total Sales: </h2>
        <?php
         include 'getGenre.php';
        ?>
        <br>

        <h2> Movie Count by Genre: </h2>
        <?php
         include 'getNum.php';
        ?>
        <!-- you can just get the rating information through whichever table it is that contains the information -->
        <p> Ratings: </p> 
        <p> All movies with average rating of 4 or more stars </p>
        <?php
          include 'getRatings.php';
        ?>
        <br>
        <footer>
            &copy; Jieni and Jaisen
        </footer>
        <?php
                mysqli_close($connection);
        ?>
</body>
</html>
