<?php
session_start();

if(!isset($_SESSION['eeid']))
{
  header('location:empelogin.php');
}
error_reporting(0);
if($_GET['success']==1){
	echo("<script> alert('Applied ')</script>");
}

 ?>
<html>
<head>
<title>
Welcome Employee
</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="@housamz">

	<meta name="description" content="Mass Admin Panel">
	<title>List Jobs</title>
	<link rel="stylesheet" href="includes/style.css">


	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
     <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

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
        <a href="empeind.php"><li ><i class="fa fa-circle-o fa-fw"></i> Home</li></a>
        <a href="empejob.php"><li><i class="fa fa-circle-o fa-fw"></i>Your jobs</li></a>
       <a href="empereq.php"><li><i class="fa fa-circle-o fa-fw"></i>Your Requests</li></a>
	          <a href="aboutus1.php"><li><i class="fa fa-circle-o fa-fw"></i>About US</li></a>

        <a href="signout.php"><li><i class="fa fa-circle-o fa-fw"></i>log out</li></a>
      </ul>
    </div>
	 </div>
</div>

<?php
 $con=new mysqli('localhost','root','','dai');
 $res=$con->query("select * from job ");
 
	 

?>
<div class="marginLeft">
<h1 class="ctxt" >Search Jobs</h1>
   <div class="tableBox" >
    <table id="sorted" class="table table-striped table-bordered" >
      <thead>
        <th>#</th>
		<th>Date</th>
        <th>Job Name</th>
		<th>Description</th>
        <th>Location</th>
        <th>Payment</th>
        <th>Requirement</th>
        <th></th>

      </thead>
     <tbody>
      <?php $i=0;
        while ($row = $res->fetch_assoc()) 
        { 
           $i=$i+1;
           
        ?>
          <tr>
            <td><?php echo $i;?>    </td>
			            <td data-mask="0000 00 00"><?php echo $row['date']; ?></td>

            <td><?php echo $row['desg']; ?></td>
			<td><?php echo $row['descr']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['payment']; ?></td>
			            <td><?php echo $row['requirement']; ?></td>
						

            
			
            <td colspan="center"><a href="apply.php?jid=<?=$row['jid'];?>">
			<?php 
			if($row['requirement']!=0){?>
			<button  class='btn btn-info'>Apply</button>
			<?php }?>
			</td></a>
           
		</tr>
      <?php
		}
		?>
     </tbody>
    </table>
	<!-- jQuery Version 1.11.1 -->
				<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

				<!-- Bootstrap Core JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

				<script type="text/javascript" src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
				<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

				<script type="text/javascript">
					 $(document).ready(function () {



						$("#sorted").DataTable( {
							"bStateSave": true,
							"sPaginationType": "full_numbers"
						});
					 });
				</script>
</body>
</html>