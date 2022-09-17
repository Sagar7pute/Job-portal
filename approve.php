<?php
Session_start();
//$id=$_SESSION['lid'];
		//include("includes/connect.php");
 $con=new mysqli('localhost','root','','dai');
         $eeid=$_GET['eeid'];
		$jid = $_GET['jid'];

					mysqli_query($con, "update application SET status=1 WHERE jid='$jid' AND eeid='$eeid' "); 	
					mysqli_query($con, "update job SET requirement=requirement-1 WHERE jid='$jid'  "); 
				echo mysqli_error($con);
					
					header("location:"."select.php?success=1&jid=$jid");
				
//select accept.id,accept.pid from accept,posts where accept.pid=posts.id AND posts.eid=79 				
				?>
				
				
