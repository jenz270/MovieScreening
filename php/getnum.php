<?php
$query = "select genre, count(genre) as movie_count from genre join movie on genre.movieID = movie.movieID group by genre";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to retreive total.");
}

 echo "<table>";
    echo "<tr>";
    echo "<th>"."Genre". "</th>";
    echo "<th>"."Number of Movies"."</th>";
    echo "</tr>";
while ($row = mysqli_fetch_assoc($result)) {
	 echo "<tr>";
     echo "<td>". $row["genre"]."</td>";
     echo "<td>". $row["movie_count"]. "</td>";
     echo "</tr>";
}
echo"</table>";
mysqli_free_result($result);

?>