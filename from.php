<?php include 'db.php';?>
<html>
    <head>
        <title>Retrienving Data Form Database</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Skills</th>
                <th>Country</th>
          </thead>
          <tbody>
    <?php
        $sql = "SELECT * FROM comment";
        $run_sql = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));

        while($rows = mysqli_fetch_array($run_sql)){
            echo '
                <tr>
                    <td>'.$rows['id'].'</td>
                    <td>'.$rows['name'].'</td>
                    <td>'.$rows['email_address'].'</td>
                    <td>'.$rows['gender'].'</td>
                    <td>'.$rows['skill1'].','.$rows['skill2'].','.$rows['skill3'].'</td>
                    <td>'.$rows['comments'].'</td> 
                </tr>
            ';  
        }
       
     ?>  </tbody>
     </table>
     </body>
</html>        
