<!-- 
    CS3319 Assignment 3 
    Jieni Hou Jaisen Bynoe
    staff.php is the main page for the staff. This page splits editing customer information and screenings information.
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
        <?php
        include 'connectdb.php';
        ?>
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>

        <br>
        <hr>
        <div id="ssumary">
            <h2 class="titles"> Screenings Summary </h2>
        <ul>
            <li class="first">
            <h3> Total Sales: </h3>
            <?php
            include 'getGenre.php';
            ?>
            </li>
            <li class="second">
             <h3> Movie Count by Genre: </h3>
             <?php
             include 'getNum.php';
             ?>
            </li>
            <li class="third">
            <h3> Ratings: </h3> 
            <h3> All movies with average rating of 4 or more stars </h3>
            <?php
            include 'getRatings.php';
            ?>
            </li>
          </ul>
        </div>

        <br>
        
        <div id="smanage">
            <h2 class="titles"> Screenings Management </h2>
            <form method="link" action="movieMod.php">
               <input type="submit" value="Enter">
            </form>
        </div>

        <br>

        <div id="cmanage">
            <h2 class="titles"> Customer Management <h2>
            <h3> List of All Customers: </h3>
            <?php 
            $query = "select * from customer";
            $result = mysqli_query($connection,$query);
            if(!result){
                 die("databases query failed.");
            }
             echo "<table align=". '"'. "center". '"'. ">";
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
          <ul>
          <li class="first">
            <h3> Selling Tickets: </h3>
            <h3> Select Customer:</h3>
            <form action="sellTicket.php" method="post">
            <?php
            include 'getCust.php';
            ?>
            <h3> Showing: </h3>
            <?php
            include 'getShowArray.php';
            ?>
            <br>
             <h3> Ticket Price: <input type="number" name="price" min="1"></h3><br>
             <input type="submit" value="Sell Ticket">
             </form>
           </li>
              
            <li class="second">
             <h3> Add New Customer: </h3>
             <form action="addNewCust.php" method="post">
                <h3>Customer name: <input type="text" name="custname"></h3>
                <h3>Email: <input type="text" name="email"></h3>
                <h3>Sex: <input type="text" name="sex"></h3>
                <input type="submit" value="Add Customer">
             </form>
             </li>
          
            <li class="thirdd">
             <h3> Delete a Customer: </h3>
             <form action="deleteCustomer.php" method="post">
            <?php
             include 'getCustArray.php';
            ?>
            <p><input type="submit" value="Delete Customer"></p>
            </form>
            </li>
           
            <li class="forth">
             <h3> Update a Customer's Info: </h3>
             <form action="updateCustomer.php" method="post">
             <?php
            include 'getCust.php';
             ?>
            <p><input type="submit" value="Update Selected Customer"></p>
            </form>
           </li>
          </ul>
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
