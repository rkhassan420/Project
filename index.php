<?php require "connection.php" ?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">  

  
</head>
<body>

    <section>

        <div>
            <a href="index.php">  <img src="./images/ali.png">  </a>
        </div>

        <div class="site">
            <a id="site_link" href="index.php"> https://umk.rk.edu.pk/</a> <hr>
        </div>

    </section>



    <div>
        <table align="center">

            <tr>
                <td> <img src="./images/student.jpg" height="100px"> </td>
                <td> <a href="student_login.php"> <h3> Student Services </h3> </a> </td>
            </tr>

             <tr>
                <td> <img src="./images/teacher.jpg" height="100px"> </td>
                <td> <a href="teacher.php">  <h3> Teacher Services </h3> </a> </td>
            </tr>

             <tr>
                <td> <img src="./images/administration.jpg" height="100px"> </td>
                <td> <a href="admin.php"> <h3> Administration Services </h3> </a> </td>
            </tr>

            
        </table>
    </div>
    
   
</body>
</html>
