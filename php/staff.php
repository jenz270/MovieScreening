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
        <hr>
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
        <hr>
        
        <div id="smanage">
            <h2> Screenings Management </h2>
            <form method="link" action="movieMod.php">
               <input type="submit" value="Enter">
            </form>
        </div>

        <br>
        <hr>

        <div id="cmanage">
            <h2> Customer Management <h2>
            <h3> List of All Customers: </h3>
            <?php 
            $query = "select * from customer";
            $result = mysqli_query($connection,$query);
            if(!result){
                 die("databases query failed.");
            }
             echo "<table>";
             echo "<tr>";
             echo "<th>"."Name". "</th>";
             echo "<th>"."Email"."</th>";
             echo "<th>"."Sex"."</th>";
             echo "</tr>";
             while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row["name"] . "</td>"; 
                echo "<td>".$row["email"] . "</td>";
                echo "<td>".$row["sex"] . "</td>";
                echo "</tr>";
             }
             echo"</table>";
             mysqli_free_result($result);
        ?>
            <h3> Selling Tickets: </h3>
            <form action="sellTicket.php">
            Select Customer:
            <?php
            include 'getCustArray.php';
            ?>
            <br>
            Showing:
            <?php
            include 'getShowArray.php';
            ?>
             <p>Ticket Price: <input type="text" name="price"><br></p> 
             <input type="submit" value="Sell Ticket">
             </form>
        
              <br>

             <h3> Add New Customer: </h3>
             <form action="addNewCust.php" method="post">
                Customer name: <input type="text" name="custname"><br>
                Email: <input type="text" name="email"><br>
                Sex: <input type="text" name="sex"><br>
                <input type="submit" value="Add Customer">
             </form>
              <br>
             <h3> Delete a Customer: </h3>
             <form action="deleteCustomer.php" method="post">
            <?php
             include 'getCustArray.php';
            ?>
            <p><input type="submit" value="Delete Customer"></p>
            </form>
            <br>
             <h3> Update a Customer's Info: </h3>
             <form action="updateCustomer.php" method="post">
             <?php
            include 'getCust.php';
             ?>
            <p><input type="submit" value="Update Selected Customer"></p>
            </form>
        </div>

        <br>
        <hr>
         <form action="../index.php">
          <input type="submit" value="Logout">
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
