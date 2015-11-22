 <!--

 CS3319 Assignment 3
 getGenre.php gets the genres and total ticket sales in each genre  

  -->

<?php
    $query = "select * from genre";
    $result = mysqli_query($connection,$query);
    if(!result){
        die("databases query failed.");
    }
    while($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" ';
        echo '>' . $row["genre"] . $row["total_sales"] . "<br>";
    }
    mysqli_free_result($result);
?>
