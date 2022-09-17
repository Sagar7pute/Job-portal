<?php
Session_start();
//$id=$_SESSION['lid'];
		//include("includes/connect.php");
 $con=new mysqli('localhost','root','','dai');
         $eeid=$_GET['eeid'];
		$jid = $_GET['jid'];

					mysqli_query($con, "DELETE FROM application  WHERE jid='$jid' AND eeid='$eeid' "); 	
				echo mysqli_error($con);
					
					header("location:"."select.php?success=2&jid=$jid");
				
//select accept.id,accept.pid from accept,posts where accept.pid=posts.id AND posts.eid=79 				
				?>
				
				
