<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="@housamz">

	<meta name="description" content="Mass Admin Panel">
	<title>Log-In</title>
				<link rel="stylesheet" href="includes/style.css">


	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

</head>


<body>

   <div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="ctxt" >Employee LogIn</h1>
				<div>
					<form method="post">
					
					<input class="form-control" placeholder="Enter Number" name="num" type="text"  required><br>
					<input type="" class="form-control" placeholder="Enter Password" name="pass" pattern="[0-9]{4}" title="Please Enter 4 Digit PIN" required><br>
					

					<button name="log" class="btn btn-lg btn-primary btn-block" type="submit">Log-In</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>	
<?php 
    if(isset($_POST['log']))
	{
	    $num=$_POST['num'];
        $pass=$_POST['pass']; 	
		 $con = new mysqli('localhost','root','','dai');
         $result=$con->query("Select * from employee where econ='$num' AND epass='$pass'");	
         if($result->num_rows>0) 
         {   	
	        session_start();
			$data=$result->fetch_assoc();
			$_SESSION['eeid']=$data['eeid'];
           header('location:empeind.php');
		   
		 }			
		 else
		 {
			 echo "error";
		 } 
	}	 
?>		 