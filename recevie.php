<?php

if(isset($_POST['validate'])){
    echo "The username is: $_POST[login_email] <br>";
echo "The password is: $_POST[login_password] <br>";
}else{
    echo 'Sorry, There$apos: no request we recevied';
}

?>