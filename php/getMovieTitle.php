<form method="post" action="getMovieListByMovieTitle.php">

<?php



    $query = "select moviename from movie";
   $result = mysqli_query($connection,$query);
   if (!$result) {
     die("Failed to retreive Movie List");
 }

    echo "<html>";
    echo "<body>";



    echo "<select name='moviename'>";
  while ($row = $result->fetch_assoc()) {

                  unset($name);
                  $name = $row['moviename'];
                  echo '<option value="">'.$name.'</option>';

}
    echo "</select>";
    echo "</body>";
    echo "</html>";

?>
<input type="submit" name="moviename"/>
</form>
