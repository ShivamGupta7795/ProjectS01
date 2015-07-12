<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/jquery101.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="jumbotron" id="headmain">
		<h1 >Registration Form</h1>
	</div>
	<?php $logm=$_SERVER['PHP_SELF']; ?>
	<form action="<?php echo $logm ?>" method="post">
		<div class="form-group">
			<label name="usr">NAME</label>
			<input class="form-control" type="text" id="inputname"  placeholder="NAME" name="username">
		</div>

		<div class="form-group">
			<label name="usr">EMAIL-ID</label>
			<input class="form-control" type="email" id="inputmail" placeholder="EMAIL" name="email">
		</div>

		<div class="form-group">
			<label name="usr">PASSWORD</label>
			<input class="form-control" type="password" id="inputpass" placeholder="PASSWORD" name="password">
		</div>

		<div class="form-group">
			<label name="usr">D.O.B.</label>
			<input class="form-control" type="date" id="inputdate" placeholder="DATE OF BIRTH" name="DOB">
		</div>

		<div class="row">
			<div class="col-sm-6">
				<button  class="btn btn-primary btn-md  active" id="buttonone" name="button101">SUBMIT</button>
			</div>
			<div class="col-sm-6">
				<!-- <button type="reset" class="btn btn-primary btn-md  active" id="buttontwo" >RESET</button> -->
				<input type="reset" value="RESET" class="btn btn-primary btn-md  active" id="buttontwo">

			</div>
		</div>

	<?php 
		if(isset($_POST['button101']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$DOB=$_POST['DOB'];

			if($username!=null && $password!= null && $email!=null && $DOB!=null)
			{


				$string101=$username."\r\n".$email."\r\n".$password."\r\n".$DOB."\r\n";	


				$varfile=fopen("textfiles/".$username.".txt","x") or die("unable to open file");
				fwrite($varfile,$string101);
				
				fclose($varfile);

				// $varfile101=fopen("textfiles/".$username.".txt","r") or die("unable to open file");
				// echo fread($varfile,filesize($username.".txt"));
				// fclose($varfile101);
			}

		}

	 ?>

	
</div>
</form>
</body>
</html>