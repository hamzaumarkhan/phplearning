<?php
       // Serever
       $server = 'localhost';

       //Username
       $user = 'root';
   
       // Password
       $password = '';
   
       // Database name
       $db = 'php_course';
   
       // Database Connection
       //$conn = mysqli_connect($server,$user,$password,$db);

       $conn = mysqli_connect ($server, $user, $password, $db) or die('try again in some minutes, please');
    
    //    if($conn) {
    //        echo "connection working";
    //    } else {
    //        echo "connection not working";
    //    }

     

    ?>