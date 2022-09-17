<?php
session_start();
if(!isset($_SESSION['eid']))
{
  header('location:emplogin.php');
}

 ?>
<html>
<head>
<title>
View jobs 
</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="@housamz">

	<meta name="description" content="Mass Admin Panel">
	<title>List Jobs</title>
    <link rel="stylesheet" href="includes/style.css">


	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">


<style type="text/css">
 <?php include 'includes/customstyle.css ';?>
 </style>
</head>


<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
  <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a href="index.php" style="color: white;text-decoration: none;"> </a>
  </div>
  
  <div style="background: #1A2226;font-size: 10pt;padding: 11px;color: #79978F">MAIN NAVIGATION</div>
  <div>
    <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
    <div class="item">
      <ul class="nostyle zero">
        <a href="empind.php"><li ><i class="fa fa-circle-o fa-fw"></i> Home</li></a>
        <a href="emplist.php"><li><i class="fa fa-circle-o fa-fw"></i>List jobs</li></a>
       <a href="empview.php"><li><i class="fa fa-circle-o fa-fw"></i>View listing</li></a>

        <a href="signout.php"><li><i class="fa fa-circle-o fa-fw"></i>sign out</li></a>
      </ul>
    </div>
	 </div>
</div>

<div class="MarginLeft">
<h1 class="ctxt"> Update Requirement</h1>



 <div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				
				<div>
					<form method="post">
					<input class="form-control" placeholder="Enter new Requirement" name="req" type="text"  required><br>
					

					<button name="upd" class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$jid=$_GET['jid'];
$id=$_SESSION['eid'];
if(isset($_POST['upd'])){
	$req=$_POST['req'];
	 $con=new mysqli('localhost','root','','dai');
	 if($con->query("update job SET requirement = '$req' WHERE jid='$jid' AND eid='$id'"))
	 {
          echo("<script> alert('Updated Sucessfully');</script>");
	 }	
     else{
		 echo mysqli_error($con);
	 }		 
}
?>


