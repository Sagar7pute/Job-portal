<?php
Session_start();
$id=$_SESSION['eeid'];
		//include("includes/connect.php");
 $con=new mysqli('localhost','root','','dai');
         $jid=$_GET['jid']; 
      

					mysqli_query($con, "insert into application(eeid,jid,status)  values('$id','$jid',0) "); 	
				echo mysqli_error($con);
					
					header("location:"."empeind.php?success=1");
					
		 
        	  
				
//select accept.id,accept.pid from accept,posts where accept.pid=posts.id AND posts.eid=79 				
				?>
				
				
