<?php

    $custName = $_POST["custname"];
    $custid = $_POST["custid"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $query = 'insert into customer values("' . $custid . '","' . $custName . '","' . $email . '","' . $sex . '")';
    $result = mysqli_query($connection, $query))
    if (!$result) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "The Customer was added!";

    mysqli_close($connection);
?>
