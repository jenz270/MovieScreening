<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
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
        
        <div id="ssumary">
            <h2> Screenings Summary </h2>
            <h3> Total Sales: </h3>
            <?php
            include 'getGenre.php';
            ?>
             <br>

             <h3> Movie Count by Genre: </h3>
             <?php
             include 'getNum.php';
             ?>

            <br>

            <h3> Ratings: </h3> 
            <h3> All movies with average rating of 4 or more stars </h3>
            <?php
            include 'getRatings.php';
            ?>
        </div>

        <br>
        
        <div id="smanage">
            <h2> Screenings Management </h2>
            <form method="link" action="movieMod.php">
               <input type="submit" value="Enter">
            </form>
        </div>

        <br>

        <div id="cmanage">
            <h2> Customer Management <h2>
            <h3> Selling Tickets: </h3>
            <p>Customers:</p>
            <?php
            include 'getCust.php';
            ?>
            <p>Showing:</p>
            <?php
            include 'getShowing.php';
            ?>

             <form action="sellticket.php">
                <p>Ticket Price: <input type="text" name="price"><br></p> 
                <input type="submit" value="Sell Ticket">
             </form>
        
              <br>

             <h3> Add New Customer: </h3>
             <form action="addNewCust.php" method="post">
                Customer name: <input type="text" name="custname"><br>
                Customer ID: <input type="text" name="custid"><br>
                Email: <input type="text" name="email"><br>
                Sex: <input type="text" name="sex"><br>
                <input type="submit" value="Add Customer">
             </form>
        </div>

        <br>
        <footer>
            &copy; Jieni and Jaisen
        </footer>
        <?php
                mysqli_close($connection);
        ?>
</body>
</html>
