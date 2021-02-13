<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    if(empty($username)){
        $error = "Username is empty";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Validation Form</title>
</head>
<body>
<?php
if(isset($error)){
    echo $error;
}
<form action ="" method="PODT">
<table>
<tr>
    <td>Username : </td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
    <td>Password : </td>
    <td><input type="passsword" name="password"> more than 5 charectors</td>
</tr>
<tr>
    <td>Email : </td>
    <td><input type="text" name="email"> </td>
</tr>
<tr>
    <td>Cobtact Number</td>
    <td><input type="text" name="contact"></td>
</tr>
<tr>
    <td> </td>
    <td><input type="submit" name="submit" value="click to validate"></td>
</tr>
</table>
</form>\
</body>
</html>



 
