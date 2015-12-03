<!-- 
    CS3319 Assignment 3 
    Jieni Hou Jaisen Bynoe
    movieMod.php is the Screenings Management main page. 
-->
<!DOCTYPE html>
<html>
<head>
        <title>JJ Screenings Management</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
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
        <hr>
        <h2> Screenings Management </h2>
        <br>
        <div id="movies">
            <h2 class="titles"> Movies </h2>
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
        <ul>
        <li class="second">
        <h3> Add a movie: </h3>
        <form action="addNewMovie.php" method="post">
             Movie Title: <input type="text" name="movien"><br>
             Year: <input type="text" name="year"><br>
             Genre: 
             <select name="genreList">
                    <option value="Comedy">Comedy</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Documentary">Documentary</option>
              </select>
              <br>
        <input type="submit" value="Add New Movie">
        </form>
        </li>
        <li class="second">
        <h3> Delete movies: </h3>
        <form action="deleteMovie.php" method="post">
            <?php
             include 'getMovie.php';
            ?>
        <p><input type="submit" value="Delete Movies"></p>
        </form>
        </li>
        <li class="second">
        <h3> Update a movie: </h3>
        <form action="update.php" method="post">
        <?php
            include 'getMovie.php';
        ?>
        <p><input type="submit" value="Update Selected Movie"></p>
        </form>
        </li>
        </ul>
        </div>
        <br>
        <hr>
        <br>
        <div id= "showings">
        <h2 class="titles"> Showings </h2>
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
        <ul>
            <li class="second">
        <h3> Add Showings: </h3>
        <form action="addNewShowing.php" method="post">
            
             Show Date: <input type="date" name="showdate"><br>
             Show Time: <input type="time" name="showtime"><br>
             Room Number: <input type="text" name="roomnum"><br>
             Movie Title:
            <?php
                 include 'getMovieArray.php';
            ?>
        <input type="submit" value="Add New Movie">
        </form>
        </li>
        <li class="second">
        <h3> Delete Showings: </h3>
        <form action="deleteShow.php" method="post">
            <?php
             include 'getShow.php';
            ?>
        <p><input type="submit" value="Delete Showings"></p>
        </form>
        </li>
        <li class="second">
        <h3> Update a Showing: </h3>
        <form action="updateShow.php" method="post">
        <?php
            include 'getShowInfo.php';
        ?>
        <p><input type="submit" value="Update Selected Showing"></p>
        </form>
        </li>
        </ul>
        </div>

        <br>
        <hr>

        <div id="genre">
            <h2 class="titles"> Genre </h2>
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
        <ul>
            <li class="second">
         <h3> Add Genre Info to a Movie: </h3>
         <form action="addNewGenre.php" method="post">
              Genre: 
              <select name="genreList">
                    <option value="Comedy">Comedy</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Documentary">Documentary</option>
              </select>
              <br>
             Movie Title: 
              <?php
                 include 'getMovieArray.php';
                ?>
        <input type="submit" value="Add New Genre to Movie">
        </form>
        </li> 
        <li class="second">  
         <h3> Delete Genre: </h3>
         <form action="deleteGen.php" method="post">
            <?php
             include 'getGen.php';
            ?>
        <p><input type="submit" value="Delete Showings"></p>
        </form>
       </li>
       <li class="second">
        <h3> Update a Genre: </h3>
        <form action="updateGenre.php" method="post">
        <?php
            include 'getGenreInfo.php';
        ?>
        <p><input type="submit" value="Update Selected Genre"></p>
        </form>
        </li>
       </ul>
        </div>

        <br>
        <hr>
        <br>
        <div id="theatreinfo">
            <h2 class="titles"> Theatre </h2>
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
             <ul>
                <li class="second">
            <h3> Add Theatre Room and Capacity: </h3>
             <form action="addNewTheatre.php" method="post">
             Room Number: <input type="text" name="roomnumb"><br>
             Capacity: <input type="text" name="capa"><br>
             <input type="submit" value="Add New Theatre">
             </form>
         </li>
         <li class="second">
            <h3> Delete Theatre Room Information: </h3>
            <form action="deleteThe.php" method="post">
            <?php
             include 'getThe.php';
            ?>
            <p><input type="submit" value="Delete Theatre"></p>
            </form>
        </li>
        <li class="second">
            <h3> Update Theatre Room Information: </h3>
            <form action="updateTheatre.php" method="post">
             <?php
                 include 'getTheatreInfo.php';
            ?>
            <p><input type="submit" value="Update Selected Theatre"></p>
            </form>
        </li>
       </ul>
        </div>

        <br>
        <hr>
         <form action="staff.php">
          <input type="submit" value="Back to Management Summary">
         </form>
        <hr>
 		<footer>
            &copy; Jieni and Jaisen
        </footer>

</body>
</html>