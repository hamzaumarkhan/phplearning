<?php  include 'includes/db.php'; ?>
<!Doctype html>
<html>
    <head>
    <title>New Form</title>       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1>User Detail</h1>
                    <p>Let just get the complete detail</p>            
                </div>
            </div>

            <?php 
                if( isset($_GET['user_id']) ) {
                    $sql = "SELECT * FROM comments WHERE id = '$_GET[user_id]'";
                    $run_sql = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));

                    while($rows = mysqli_fetch_array($run_sql)){
                
                        echo '
                            <div class="row">
                                <div class="col-sm-3">Name</div>
                                <div class="col-sm-3">'.$rows['name'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Email</div>
                                <div class="col-sm-3">'.$rows['email_address'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Subject</div>
                                <div class="col-sm-3">'.$rows['subject'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Gender</div>
                                <div class="col-sm-3">'.$rows['gender'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Skills</div>
                                <div class="col-sm-3">'.$rows['skill1'].','.$rows['skill2'].','.$rows['skill3'].','.$rows['skill4'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Country</div>
                                <div class="col-sm-3">'.$rows['country'].'</div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">Comments</div>
                                <div class="col-sm-3">'.$rows['comments'].'</div>
                            </div>                         
                        ';  
                    } 
                }
                    
            ?>

           
    </div>

    <script src="bootstrap/js/jquery.js"></script>    
    <script src="bootstrap/js/bootstrap.js"></script>
    <body>
</html> 