<?php
    // Serever
    $server = 'localhost';

    //Username
    $user = 'zeshan';

    // Password
    $password = 'root';

    // Database name
    $db = 'php_course';

    // Database Connection
    $conn = mysqli_connect($server,$user,$password,$db);
    
    // Connection error
    if(!$conn){
        die("Connection Failed:" . mysqli_connect_error()); 
    }

    ?>