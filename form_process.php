<?php 
    include 'includes/db.php';

    
    if(isset($_POST['submit_form']) && !empty($_POST['submit_form'])) {
       // there is something in the field, do stuff
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $gender = strip_tags($_POST['gender']);
        $country = strip_tags($_POST['country']);
        $comments = trim(htmlspecialchars($_POST['comments']));
        if(empty($_POST['skill1'])){
            $_POST['skill'] = '';
        }
        if(empty($_POST['skill2'])){
            $_POST['skil2'] = '';
        }
        if(empty($_POST['skill3'])){
            $_POST['skill3'] = '';
        }
        if(empty($_POST['skill4'])){
            $_POST['skill4'] = '';
        }

        // $ins_sql = "INSERT INTO comment (`name`, `email_address`, `subject`, `gender`, `skill1`, `skill2`, `skill3`, `skill4`, `country`, `comments`) VALUES ('$name', '$email', '$subject', '$gender', '$POST[skill1]', '$POST[skill2]', '$POST[skill3]', '$POST[skill4]', '$country', '$comments')";


        if (mysqli_query("INSERT INTO comment (`name`) VALUES ('$name')")or die(mysql_error())) {
            echo 'Success';
          } else {
            echo 'Fail';
          } 


        
        // $run_sql = mysql_query($conn, $ins_sql);
        $result = mysqli_query($conn, $ins_sql) or trigger_error("Query Failed! SQL: $sql$ins_sql - Error: ".mysqli_error($conn), E_USER_ERROR);



    } else {
        // trigger error
    }

    // if(isset($_POST['submit_form'])) {
        
        // $name = strip_tags($_POST['name']);
        // $email = strip_tags($_POST['email']);
        // $subject = htmlspecialchars($_POST['subject']);
        // $gender = strip_tags($_POST['gender']);
        // $country = strip_tags($_POST['country']);
        // $comments = trim(htmlspecialchars($_POST['comments']));
        // if(empty($_POST['skill1'])){
        //     $_POST['skill'] = '';
        // }
        // if(empty($_POST['skill2'])){
        //     $_POST['skil2'] = '';
        // }
        // if(empty($_POST['skill3'])){
        //     $_POST['skill3'] = '';
        // }
        // if(empty($_POST['skill4'])){
        //     $_POST['skill4'] = '';
        // }

        // $ins_sql = "INSERT INTO comment (`name`, `email_address`, `subject`, `gender`, `skill1`, `skill2`, `skill3`, `skill4`, `country`, `comments`) VALUES ('$name', '$email', '$subject', '$gender', '$POST[skill1]', '$POST[skill2]', '$POST[skill3]', '$POST[skill4]', '$country', '$comments')";
        
        //$run_sql = mysql_query($conn, $ins_sql);
         
    // } else {
    //     echo 'if condition not working';
    // }

?>