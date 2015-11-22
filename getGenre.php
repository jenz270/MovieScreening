 <!--

 CS3319 Assignment 3
 getGenre.php gets the genres and total ticket sales in each genre  

  -->

<?php
    $query = "select genre,sum(payment) as total_sales from genre join movie on genre.movieID = movie.movieID join showing on movie.movieID = showing.movieID join selected on showing.showID = selected.showID group by genre";
    $result = mysqli_query($connection,$query);
    if(!result){
        die("databases query failed.");
    }
    echo "<table>";
    echo "<tr>";
    echo "<th>"."Genre". "</th>";
    echo "<th>"."Total Sales"."</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)){
       echo "<tr>";
       echo "<td>".$row["genre"] . "</td>"; 
       echo "<td>".$row["total_sales"] . "</td>";
       echo "</tr>";
    }
    echo"</table>";
    mysqli_free_result($result);
?>
