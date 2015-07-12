<!DOCTYPE html>
<html>
<head>
	<title>Division	Login Page</title>
	<link href="css\contact.css" type="text\css" rel="stylesheet">
	<!-- <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> -->
</head>
<body>
<?php $logm=$_SERVER['PHP_SELF']; ?>
<form action="<?php echo $logm ?>" method="post">
<div class="loginpage">	

<div class="innerlogin">
	<div class="row">	
		<div class="cols_span">
		<h1>LOGIN PAGE</h1> 	
		</div>
	</div>

	<div class="row">
		<div class="col_one">	
				<h3>User Name</h3>
		</div>

		<div class="col_two">	
				<input type="text"  name="userid" size=30 placeholder="USER_ID"/>
		</div>	

	</div>

	<div class="row">
		<div class="col_one">	
				<h3>Password</h3>
		</div>

		<div class="col_two">	
				<input type="password"  name="pass" size=30 placeholder="PASSWORD"/>
		</div>	

	</div>


	<div class="row">
		
		<div class="col_one">	
		</div>
		<div class="col_two">	
				<a  href="#">Forgot Passowrd</a>
		</div>	

	</div>

	<div class="row">
		
		<div class="cols_span">	
				<input type="submit"  name="submit101" value="SUBMIT" class="buttonone"/>
		</div>	

	</div>
</div>
</div>
</form>

<?php 
	if(isset($_POST['submit101']))
	{
		$userid=$_POST['userid'];
		$password=$_POST['pass'];


		$varfile=fopen("textfiles/".$userid.".txt","r") or die("WRONG USER ID");
		// echo fread($varfile,filesize("textfiles/".$userid.".txt"));
		$lines=file("textfiles/".$userid.".txt");
		$pass101= $lines[2];
		$int= strcmp($pass101,$password);
		echo $int;
		if($int==2){
			header("location: http://localhost/myproj/index102.php");			

		}

		else{
			echo "<script>alert('wrong password' )</script>";
		}


	}


 ?>

</body>
</html>