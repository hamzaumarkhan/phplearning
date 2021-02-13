<?php
$name = '';
$email = '';
$subject = '';
$gender = '';
$skill1 = '';
$skill2 = '';
$skill3 = '';
$skill4 = '';
$country = '';
$comments = '';
$result = '';


if(isset($_POST['validate'])){
    if (empty($_POST['name'])) {
        $name = '<span style="color:red;">The Name Field is Empty</span>';
    }else{
       $name = '<span style="color:red;">'.htmlspecialchars($_POST['name']).'</span>';
    }
    if (empty($_POST['email'])){
        $email ='<span style="color:red;">' .strip_tags($_POST['email']).'</span>';
    }else{
        $email = '<span style="color:red;">Email Field is Required!</span>';
    }
    if (empty($_POST['subject'])){
        $subjectx_emp = '<span style="color:red;">Subject Field is Required</span>'; 
    }else{
        $subject = '<span style="color:red;">'.htmlspecialchars($_POST['subject']).'</span>';
    }
    echo 'The Comments are: <br>'.htmlspecialchars($_POST['comments'])."<br>";
}else{
    echo 'Sorry, There$apos: no request we recevied';
}
?> 
<html>
    <head><title>PHP Form</title>
</head>
<body>
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
        <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                        <td>E_mail Address</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                        <td>Subject</td>
                    <td><input type="text" name="subject"></td>
                 </tr>
                 <tr>
                        <td>Your Gender</td>
                </tr>
                <tr>
                    <td>Male:<br>Female:<br>Other</td>
                        <td><input type="radio" value="male" name="gender"><br><input type="radio" name="gender"value="female"><br><input type="radio" value="other" name="gender"></td>
                </tr>
                <td>
                        Skills:
                    </td>
                    <td>
                        <input type="checkbox" name="skils1" value="html">: HTML <br>
                        <input type="checkbox" name="skils2" value="php">: PHP <br>
                        <input type="checkbox" name="skils2" value="css">: CSS <br>
                        <input type="checkbox" name="skils2" value="javascript">: JAVASCRIPT <br>
                        </td>
                    </tr> 
                        <td>Country</td>
                    <td>
                        <select name="country">
                            <option selected>Select a Country</option>
                            <option value="pakistan">Pakistan</option>
                            <option value="russia">Russia</option>
                            <option value="england">England</option>
                            <option value="america">America</option> 
                        </select>
                    </td>
                    </tr>                               
                    <tr>
                        <td>Comments</td>
                        <td><textarea name="comments"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" value="yes" name="validate"></td>
                        <td><input type="submit" name="login_submite"></td>
                    </tr>
            </table>
        </form>
     </body>
</html>
