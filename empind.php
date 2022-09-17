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
Welcome Employer 
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
       <a href="aboutus.php"><li><i class="fa fa-circle-o fa-fw"></i>About Us</li></a>

        <a href="signout.php"><li><i class="fa fa-circle-o fa-fw"></i>sign out</li></a>
      </ul>
    </div>
	 </div>
  </div>
</body>
</html>
<?php
$id=$_SESSION['eid'];
	  $con=new mysqli('localhost','root','','dai');
$arr=$con->query("select * from job Where eid='$id'  ");

?>

<div class="marginLeft">
<h1 class="ctxt" >Current Stats</h1>
   <div class="tableBox" >
    <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
      <thead>
        <th>#</th>
		<th>Date</th>
        <th>Job Name</th>
		<th>Description</th>
        <th>Location</th>
        <th>payment</th>
         <th>Requirement</th>
          <th>View Employees</th> 
      </thead>
     <tbody>
      <?php $i=0;
        while ($row = $arr->fetch_assoc()) 
        { 
           $i=$i+1;
           
        ?>
          <tr>
            <td><?php echo $i;?>    </td>
			            <td><?php echo $row['date']; ?></td>

            <td><?php echo $row['desg']; ?></td>
			<td><?php echo $row['descr']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['payment']; ?></td>
            <td><?php echo $row['requirement']; ?></td>
            <td colspan="center"><a href="view.php?jid=<?=$row['jid'];?>"><button name="view" class='btn btn-success'>View</button></a></td>

            
			
           
           
		</tr>
      <?php
		}
		?>
     </tbody>
    </table>
