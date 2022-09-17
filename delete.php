<?php
Session_start();
$id=$_SESSION['eid'];
		//include("includes/connect.php");
 $con=new mysqli('localhost','root','','dai');
         $jid=$_GET['jid'];


					mysqli_query($con, "DELETE FROM  job  WHERE jid='$jid' AND eid='$id' "); 	
				echo mysqli_error($con);
					
					header("location:"."empview.php?success=1");
				
//select accept.id,accept.pid from accept,posts where accept.pid=posts.id AND posts.eid=79 				
				?>
				
				
