<?php
    // host name, database username, password, and database name.
    $conn = mysqli_connect("localhost","root","@@hell","demologin");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>