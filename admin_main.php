 <?php
 	 session_start();
     require "connection.php";
  ?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>	 

	 <style type="text/css">
	 	

		*{
			margin: 0;
			padding: 0;
			/*font-family: 'Courier New', monospace; 	*/		
			box-sizing: border-box;
		}
		
		.header{
			display: flex;
            justify-content: space-between;
            align-items: center;           
            height: 65px;
            margin: 5px;
            padding: 5px; 
            border-bottom: 2px solid #cccc;                  

		}

		.logout{
			color: white;  		
  			background-color: orange; 		
  			padding: 8px;  			
  			text-decoration: none;           
            cursor: pointer;
            margin-right: 12px;
		}	
   
		.tab {
		  float: left;
		  border: 1px solid #ccc;
		  background-color: #3B444B;
		  width: 13%;
		  height: 542px;
		  margin-left: -2px;
		}

		.tab a{

			 display: block;	  	
		 	 color: white;
		  	 padding: 10px 20px;		    	   
		     cursor: pointer;		    
		     font-size: 15px;
		     text-decoration: none;		   

		}

		.tab a:hover{
			background-color: orange;
		}


		.homeContent {
		  float: left;
		  padding: 10px 12px;		
		  width: 86%;		
		  height: 560px;
		  margin-left: 5px;
		  line-height: 25px;
		  border: px solid;	
		      
		}		


		table{
			border: px solid;
			border-collapse: collapse;
			width: 100%;			
			text-align: left;		
			justify-content: center;
			
		}
		

		td{
			border: px solid;
			font-size: 18px;
			padding: 8px;
			height: 120px;			

		}

		
		 .figure{			
			margin-top: 10px;			
			text-align: center;
			width: 90%;
			padding: 23px;
			background-color: orange;
			color: white;
			
			
		}

	
	 </style>
	
</head>
<body>

	<section class="header">

		<img src="./images/ali.png" height="45px">
		<a href="logout.php" class="logout">Logout</a>		
		
	</section>

  

	<section class="tab">				

			<a href="admin_main.php">Home</a>
			<a href="reg_students.php" >Register New Student</a>	
			<a href="students.php" >Students</a>	
			<a href="attendence.php" >Attendence</a>
			<a href="notice.php" >Notice</a>					
			  
    </section>	


    <section class="homeContent">

    	<table>
    		
    		<tr>
    			<td colspan="4">

    			<div class="admin_welcome">
               
            		<h3>Welcome, Ali</h3>
            		<p>You are Administrator of University of Mister Khan Student Information Portal.</p><br>

            	<?php
    			
    			
    				if(isset($_SESSION['last_session_date'])) {
        				echo "<p>=> Your last session was created on ".$_SESSION['last_session_date']."</p>";
        				echo "<p>=> Please take action, if above session was not created by you.</p>";
    				}

  				?>
  		        
  		        </div>
    			
    			</td>

    			<td>


    				<?php

    					$current_date = date('d-m-Y');
    				    echo "<p>Today Date: $current_date </p>"
    					
    				?>

    			</td>
    	    </tr>



    		<tr>
    			<td>
    				<div class="figure">
  		
            			<h4>Total Students</h4>

            		<?php

		                $sql = "SELECT * from reg_students";
		                $result = mysqli_query($conn, $sql);               
		                $num = mysqli_num_rows($result);
		                    
		                echo $num;
              
            		?>
                
        			</div>
    			
    			</td>


    			<td>

    				<div class="figure">
  		
    			        <h4>Boys Students</h4>

            		<?php

		                $sql = "SELECT * from reg_students WHERE gender = 'male'";
		                $result = mysqli_query($conn, $sql);               
		                $num = mysqli_num_rows($result);
		                    
		                echo $num;
              
            		?>
                
        			</div>
    			
    			</td>


    			<td>
    				<div class="figure">
  		
            			<h4>Girls Students</h4>

            		<?php

		                $sql = "SELECT * from reg_students WHERE gender = 'female'";
		                $result = mysqli_query($conn, $sql);               
		                $num = mysqli_num_rows($result);
		                    
		                echo $num;

         			?>
                
        			</div>
    				
    			</td>


    			<td>

    				<div class="figure">
  		
			            <h4>Total Departments</h4>  
			            <h4>1</h4>        
                
        			</div> 

    			</td>

    	    </tr>



    	    <tr>
    	    	<td>

    	    		<div class="figure">
  		
            			<h4>Present Students</h4>

            		<?php

            			$current_date = date('Y-m-d'); // Get the current date in the format 'YYYY-MM-DD'

						$sql = "SELECT * FROM attendence WHERE (lec1 = '1' OR lec2 = '1' OR lec3 = '1') AND date = '$current_date'";
		               
		                $result = mysqli_query($conn, $sql);               
		                $num = mysqli_num_rows($result);
		                    
		                echo $num;              
          			?>
                
        			</div>	
    	    		
    	    	</td>

    	    	<td>

    				<div class="figure">
  		
			            <h4>Notification</h4>

			            <?php  
			           


			            $sql = "SELECT * FROM reg_students WHERE notice IS NOT NULL";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;

?>
       
                
        			</div> 

    			</td>

    	    	

    	    	
    	    </tr>




    	</table>




  	</section>

  	 

</body>
</html>