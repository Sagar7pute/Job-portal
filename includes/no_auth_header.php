<?php
		error_reporting(0);
		session_start();
//		if ($_COOKIE["auth"] != "employer_in"){header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
			

  
				<title>Employer Dashboard</title>
	

				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
				
				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

					
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
			<!--
				<nav id="sidebar" class="bg-primary" > <!-- style="background: rgba(115, 197, 8, 0.8);" 
					<div class="sidebar-header">
						<h3>
							Employer Dashboard<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							AM<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
						
					</div><!-- /sidebar-header -->

					<!-- start sidebar 
					<ul class="list-unstyled components">
<li><a href="employee.php"> <i class="glyphicon glyphicon-info-sign"></i>Employee <span class="pull-right"><?=counting("employee", "id")?></span></a></li>
<li><a href="posts.php"> <i class="glyphicon glyphicon-tree-deciduous"></i>Posts <span class="pull-right"><?=counting("posts", "id")?></span></a></li>
<li><a href="worker.php"> <i class="glyphicon glyphicon-baby-formula"></i>Worker <span class="pull-right"><?=counting("worker", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</nav> --><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">