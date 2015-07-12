<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM SAVE</title>
	<link rel="stylesheet" type="text/css" href="css/jquery101.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
	<div class="jumbotron" id="headmain">
		<h1 >Registration Form</h1>
	</div>
	<?php $logm=$_SERVER['PHP_SELF'];?>

	<form action="<?php echo $logm ?>" method="post">
		<div class="form-group">
			<label name="usr">NAME</label>
			<input class="form-control" type="text" id="inputname" name="username"  placeholder="NAME">
		</div>

		<div class="form-group">
			<label name="usr">EMAIL-ID</label>
			<input class="form-control" type="email" id="inputmail" name="email" placeholder="EMAIL">
		</div>

		<div class="form-group">
			<label name="usr">PASSWORD</label>
			<input class="form-control" type="password" id="inputpass" placeholder="PASSWORD">
		</div>

		<div class="form-group">
			<label name="usr">D.O.B.</label>
			<input class="form-control" type="date" id="inputdate" placeholder="DATE OF BIRTH" name="DOB">
		</div>

		<div class="row">
			<div class="col-sm-6">
				<button  class="btn btn-primary btn-md  active" id="buttonone" name="mysubmit">SUBMIT</button>
			</div>
			<div class="col-sm-6">
				<!-- <button type="reset" class="btn btn-primary btn-md  active" id="buttontwo" >RESET</button> -->
				<input type="reset" value="RESET" class="btn btn-primary btn-md  active" id="buttontwo">

			</div>
		</div>

		<?php 
			if(isset($_POST['mysubmit'])){
				$username=$_POST['username'];
				$email=$_POST['email'];
				$DOB=$_POST['DOB'];
				$string=$username." ".$email." ".$DOB;
				$file= fopen('registeruser.txt',"a") or die("Unable to open file!");
				// fwrite($file,$username);
				// fwrite($file,$email);
				// fwrite($file,$DOB);
				fwrite($file,$string);
				$var= fread($file,filesize('registeruser.txt'));
				fclose($file);

			}
		 ?>	


	
</div>
</form>

<p><?php
$myfile = fopen("registeruser.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("registeruser.txt"));
fclose($myfile);
?>
				</p>

</body>
</html>