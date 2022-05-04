<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName,"8111");
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
