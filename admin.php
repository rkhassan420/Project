<?php
    session_start();
    require "connection.php";
     date_default_timezone_set('Asia/Karachi');

        if (isset($_POST['submit'])) {

            $id = $_POST['reg'];
            $pass = $_POST['pass'];

            if ($id === '' || $pass === '') {

                // echo "<script>alert('Please enter both Registration No and Password!');</script>";

            } else{
         

           $qry = "SELECT * FROM  admin WHERE id = '$id' && pass = '$pass' ";

           $result =  mysqli_query($conn, $qry); 

            if (mysqli_num_rows($result) > 0  ) {               
                $_SESSION["id"] = $id;
                $_SESSION['pass'] = $pass;
                $_SESSION['last_session_date'] = date("F j, Y, g:i a");
                $_SESSION['loggedin'] = true;                 
                header("Location:admin_main.php"); 
                exit();  

            } else {

                 //echo  "Error Finding record: " . mysqli_error($conn);
                //echo "<script> alert('incorrect id or password!');</script>";                  
        
        }
    }

}                 
        ?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="./css/admin.css">        
	
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
    


    <section class="form">
    	
    		<form method="post" action="admin.php">

					<img src="./images/ali.png" height="45px"><br><br>

					<label for="reg">Registration id: </label>
					<input id="reg" type="text" name="reg" autocomplete="off"><br><br>

					<label for="pass">Password:</label>
					<input id="pass" type="password" name="pass" autocomplete="off"><br><br><br>	

                    <input id="btn" type="submit" name="submit" value="Login Now">	<br><br>					

									
			</form><br>
    	
   </section>

   <p style="text-align: center; font-size: 15px;" >

            Copyrights © 2007 - All rights are reserved.<br>
            University of Mistr Khan, Lahore, PAKISTAN
    </p>



  <script>    

       
        window.onload = function() {
           

            <?php 

                if (isset($_POST['submit']) && ($id === '' || $pass === '') || mysqli_num_rows($result) <= 0) { 

            ?>

                alert("Incorrect id or password!");
                
            <?php 
                
                } 
        
            ?>
        
        };


    </script>  


</body>
</html>