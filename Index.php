<?php  include 'includes/db.php'; 
    if(isset($_GET['del_id'])){
        $del_sql = "DELETE FROM comments WHERE id = '$_GET[del_id]'";
        $run_sql = mysqli_query($conn,$del_sql);
    }
?>
<!Doctype html>
<html>
    <head>
    <title>New Form</title>       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>                       
                        <th>Gender</th>
                        <th>Country</th>                        
                        <th>Access</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php                        

                        $sql = "SELECT * FROM comments";
                        $run_sql = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));

                        while($rows = mysqli_fetch_array($run_sql)){
                       
                            echo '
                                <tr>
                                    <td>'.$rows['id'].'</td>                             
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['email_address'].'</td>                                    
                                    <td>'.$rows['gender'].'</td>  
                                    <td>'.$rows['country'].'</td>                                  
                                    <td><a href="detail.php?user_id='.$rows['id'].'" class="btn btn-xs btn-primary">Access</a></td> 
                                    <td><a href="index.php?del_id='.$rows['id'].'" class="btn btn-xs btn-danger">Delete</a></td> 
                                </tr>
                            ';  
                        }                    
                    ?>                
                   
                    </tbody>
                </table>
            </div>
        </div>

    <script src="bootstrap/js/jquery.js"></script>    
    <script src="bootstrap/js/bootstrap.js"></script>
    <body>
</html> 