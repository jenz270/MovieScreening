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
        <h3> Add movies: </h3>

        <h3> Delete movies: </h3>
        <form action="deleteMovie.php" method="post">
            <?php
             include 'getMovie.php';
            ?>
        <p><input type="submit" value="Delete Movies"></p>
        </form>
        <br>
        <h3> Update a movie: </h3>
        <form action="update.php" method="post">
        <?php
            include 'getMovie.php';
        ?>
        <p><input type="submit" value="Update Selected Movie"></p>
        </form>
        </div>
		
        <br>
        <hr>

        <div id= "showings">
        <h3> All Current Showings </h3>
        <?php

            $query = "select moviename,show_date,show_time from movie join showing where movie.movieID = showing.movieID";
            $result = mysqli_query($connection,$query);
            if (!$result) {
                 die("Failed to retreive showing.");
            }
            echo "<table>";
            echo "<tr>";
            echo "<th>"."Movie Name". "</th>";
            echo "<th>"."Show Date"."</th>";
            echo "<th>"."Show Time"."</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>";
                 echo "<td>".$row["moviename"] . "</td>"; 
                 echo "<td>".$row["show_date"] . "</td>";
                 echo "<td>".$row["show_time"] . "</td>";
                 echo "</tr>";
            }
            echo"</table>";
            mysqli_free_result($result);
        ?>
        <br>
        <h3> Add Showings: </h3>
        <h3> Delete Showings: </h3>
        <form action="deleteShow.php" method="post">
            <?php
             include 'getShow.php';
            ?>
        <p><input type="submit" value="Delete Showings"></p>
        </form>
        <br>
        <h3> Update a Showing: </h3>
        <form action="updateShow.php" method="post">
        <?php
            include 'getShowInfo.php';
        ?>
        <p><input type="submit" value="Update Selected Showing"></p>
        </form>
        </div>

        <br>
        <hr>

        <div id="genre">
         <h3> Movies and their Genre: </h3>
         <?php
            $query = "select moviename,genre from movie join genre where movie.movieID = genre.movieID";
            $result = mysqli_query($connection,$query);
            if (!$result) {
                 die("Failed to retreive showing.");
            }
            echo "<table>";
            echo "<tr>";
            echo "<th>"."Movie Name". "</th>";
            echo "<th>"."Genre"."</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>";
                 echo "<td>".$row["moviename"] . "</td>"; 
                 echo "<td>".$row["genre"] . "</td>";
                 echo "</tr>";
            }
            echo"</table>";
            mysqli_free_result($result);
        ?>
         <h3> Add Genre Info: </h3>
         <h3> Delete Genre: </h3>
         <form action="deleteGen.php" method="post">
            <?php
             include 'getGen.php';
            ?>
        <p><input type="submit" value="Delete Showings"></p>
        </form>
        <h3> Update a Genre: </h3>
        <form action="updateGenre.php" method="post">
        <?php
            include 'getGenreInfo.php';
        ?>
        <p><input type="submit" value="Update Selected Genre"></p>
        </form>
        </div>

        <br>
        <hr>

        <div id="theatreinfo">
             <h3> Theatre Rooms and their Capacity: </h3>
             <?php
                 $query = "select * from theatre";
                 $result = mysqli_query($connection,$query);
                 if (!$result) {
                      die("Failed to retreive showing.");
                 }
                 echo "<table>";
                 echo "<tr>";
                 echo "<th>"."Room Number". "</th>";
                 echo "<th>"."Capacity"."</th>";
                 echo "</tr>";
                 while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["roomnum"] . "</td>"; 
                    echo "<td>".$row["capacity"] . "</td>";
                    echo "</tr>";
                 }
                 echo"</table>";
                mysqli_free_result($result);
             ?>
            <h3> Add Theatre Room and Capacity: </h3>
            <h3> Delete Theatre Room Information: </h3>
            <form action="deleteThe.php" method="post">
            <?php
             include 'getThe.php';
            ?>
            <p><input type="submit" value="Delete Theatre"></p>
            </form>
            <h3> Update Theatre Room Information: </h3>
            <form action="updateTheatre.php" method="post">
             <?php
                 include 'getTheatreInfo.php';
            ?>
            <p><input type="submit" value="Update Selected Theatre"></p>
            </form>
        </div>

        <br>
        
        <hr>
 		<footer>
            &copy; Jieni and Jaisen
        </footer>

</body>
</html>