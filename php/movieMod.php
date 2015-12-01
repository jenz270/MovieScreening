<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../jQuery/changePage.js"></script>
</head>
<body>
  <?php
        include 'connectdb.php';
        ?>
        <header>
                <h2> Jieni and Jaisen's Movie Screening Management System </h2>
        </header>

        <br>
        <h2> Screenings Management </h2>
        
        <div id="movies">
        <h3> All Movies by year: </h3>
        <?php 
            $query = "select moviename,year from movie order by year";
            $result = mysqli_query($connection,$query);
            if(!result){
                 die("databases query failed.");
            }
             echo "<table>";
             echo "<tr>";
             echo "<th>"."Movie". "</th>";
             echo "<th>"."Year"."</th>";
             echo "</tr>";
             while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row["moviename"] . "</td>"; 
                echo "<td>".$row["year"] . "</td>";
                echo "</tr>";
             }
             echo"</table>";
             mysqli_free_result($result);
        ?>
        <br> 

        <h3> Delete movies: </h3>
        <form action="deleteMovie.php" method="post">
            <?php
             include 'getMovie.php';
            ?>
        <p><input type="submit" value="Delete Movies"></p>
        </form>

        <h4> Refresh the page to see the changes on the table above! </h4>
        <br>
        <h3> Update a movie: </h3>
        

        <h4> Refresh the page to see the changes on the table above! </h4>
        </div>
		
        <br>
        <hr>

        <div id= "showings">
        

        </div>

        <br>
        <hr>

        <div id="genre">

        </div>

        <br>
        <hr>

        <div id="theatreinfo">
        </div>

        <br>
        
        <hr>
 		<footer>
            &copy; Jieni and Jaisen
        </footer>
        <?php
                mysqli_close($connection);
        ?>

</body>
</html>