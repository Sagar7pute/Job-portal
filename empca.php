<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="@housamz">

	<meta name="description" content="Mass Admin Panel">
	<title>Create Account</title>
				<link rel="stylesheet" href="includes/style.css">


	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

</head>


<body>

   <div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="ctxt" >Create Account</h1>
				<div>
					<form method="post">
					<input class="form-control" placeholder="Name" name="ename" type="text"  required><br>
					<input class="form-control" placeholder="Mobile Number" name="eph" type="text"  required><br>
				
					<input type="password" class="form-control" placeholder="Set 4 digit Pin" name="pass" pattern="[0-9]{4}" title="Please Enter 4 Digit PIN" required><br>
					

					<button name="createe" class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>	
<?php
$notice="";

 if(isset($_POST['createe']))
       {
		 $name=$_POST['ename']; 
	    
		 $eph=$_POST['eph'];

		 $pass=$_POST['pass'];
		 $conn=new mysqli('localhost','root','','dai');
		
		if($conn->query("insert into employer(ename,eph,pass) values ('$name','$eph','$pass')"))
		{
			echo "success";
			header('location:employerlog.php');
		}
		else{
              echo $conn->error; 
		}
	   }
?>	   